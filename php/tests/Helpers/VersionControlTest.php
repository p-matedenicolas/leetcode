<?php

namespace Tests\Helpers;

use App\Helpers\VersionControl;
use PHPUnit\Framework\TestCase;

class VersionControlTest extends TestCase
{
    public function testSetVersions()
    {
        $versionControl = new VersionControl();
        $versionControl->setVersions(5, 4);

        $expected = [
            1 => false,
            2 => false,
            3 => false,
            4 => true,
            5 => true
        ];

        $this->assertEquals($expected, $versionControl->versions);

    }

    public function testIsBadVersion()
    {
        $versionControl = new VersionControl();

        $versionControl->setVersions(5, 4);

        $expected = true;

        $this->assertEquals($expected, $versionControl->isBadVersion(4));
    }

    public function testIsNotBadVersion()
    {
        $versionControl = new VersionControl();

        $versionControl->setVersions(5, 4);

        $expected = false;

        $this->assertEquals($expected, $versionControl->isBadVersion(3));
    }
}
