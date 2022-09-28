<?php

namespace App\Commands\LeetCodeGenerator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class LeetCodeGeneratorCommand extends Command
{
    protected static $defaultName = "generate:leetcode";

    protected static $defaultDescription = "Creates LeetCode Solution and Test boilerplate files";

    protected function configure(): void
    {
        $this->setHelp(self::$defaultDescription)
            ->addArgument("num", InputArgument::REQUIRED, "Solution number")
            ->addArgument("name", InputArgument::REQUIRED, "Method name");
    }

    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    ): int {
        $filesystem = new Filesystem();
        $twigFilesystemLoader = new FilesystemLoader(__DIR__ . "/templates");
        $twigEnvironment = new Environment($twigFilesystemLoader);

        $inputNum = $input->getArgument("num");
        $inputNum = str_pad($inputNum, 5, "0", STR_PAD_LEFT);
        $inputName = $input->getArgument("name");

        $solutionFile = "src/Solutions/Solution" . $inputNum . ".php";
        $solutionFileContents = $twigEnvironment->render("Solution.twig", [
            "num" => $inputNum,
            "name" => $inputName,
        ]);

        $filesystem->dumpFile($solutionFile, $solutionFileContents);
        $output->writeln("Generated file " . $solutionFile);

        $testFile = "tests/Solutions/Solution" . $inputNum . "Test.php";
        $testFileContents = $twigEnvironment->render("SolutionTest.twig", [
            "num" => $inputNum,
            "name" => $inputName,
        ]);

        $filesystem->dumpFile($testFile, $testFileContents);
        $output->writeln("Generated file " . $testFile);

        $processComposer = new Process(["composer", "dump-autoload"]);
        $processComposer->run();

        $output->writeln($processComposer->getOutput());

        if (!$processComposer->isSuccessful()) {
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
