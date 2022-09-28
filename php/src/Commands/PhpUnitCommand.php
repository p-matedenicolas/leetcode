<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

class PhpUnitCommand extends Command
{
    protected static $defaultName = "test:leetcode";

    protected static $defaultDescription = "Launches php unit tests";

    protected function configure(): void
    {
        $this->setHelp(self::$defaultDescription)->addArgument(
            "unit_test_num",
            InputArgument::OPTIONAL
        );
    }

    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    ): int {
        $unitTestNum = $input->getArgument("unit_test_num");

        if (isset($unitTestNum)) {
            $processPhpUnit = new Process([
                "./vendor/bin/phpunit",
                "--testdox",
                "tests/Solutions/Solution" .
                str_pad($unitTestNum, 5, "0", STR_PAD_LEFT) .
                "Test.php",
            ]);
        } else {
            $processPhpUnit = new Process([
                "./vendor/bin/phpunit",
                "--testdox",
                "tests",
            ]);
        }

        $processPhpUnit->run();

        $output->writeln($processPhpUnit->getOutput());

        if (!$processPhpUnit->isSuccessful()) {
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
