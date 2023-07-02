<?php

namespace App\Helpers;

class VersionControl
{
    /**
     * @var array
     */
    public $versions = [];

    /**
     * @param $version
     * @return bool
     */
    public function isBadVersion($version)
    {
        return $this->versions[$version];
    }

    /**
     * @param $n
     * @param $bad
     * @return void
     */
    public function setVersions($n, $bad)
    {
        for ($i = 1; $i <= $n; $i++) {
            if ($i < $bad) {
                $this->versions[$i] = false;
            } else {
                $this->versions[$i] = true;
            }
        }
    }
}
