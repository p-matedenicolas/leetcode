<?php

namespace App\Solutions;

use App\Helpers\VersionControl;

class Solution00278 extends VersionControl
{
    protected $versionsCache = [];
    protected $prevCheckedVersion = 0;
    protected $currentVersion = 0;

    /**
     * @param Integer $n
     * @return Integer
     */
    public function firstBadVersion($n)
    {
        $firstBadVersionIndex = 0;
        $this->prevCheckedVersion = $n;
        $this->currentVersion = intval(ceil($this->prevCheckedVersion / 2));

        if ($n === 1 && $this->isBadVersion($n)) {
            return $n;
        }

        while ($firstBadVersionIndex === 0) {
            $isBadVersion = $this->cacheIsBadVersion();
            $firstBadVersionIndex = $this->checkNeighbour($isBadVersion);
            $this->inchCloser($isBadVersion);
        }

        return $firstBadVersionIndex;
    }

    /**
     * @return bool|mixed
     */
    protected function cacheIsBadVersion()
    {
        if (isset($this->versionsCache[$this->currentVersion])) {
            $isBadVersion = $this->versionsCache[$this->currentVersion];
        } else {
            $isBadVersion = $this->isBadVersion($this->currentVersion);
            $this->versionsCache[$this->currentVersion] = $isBadVersion;
        }

        return $isBadVersion;
    }

    /**
     * @param $isBadVersion
     * @return int|mixed
     */
    protected function checkNeighbour($isBadVersion)
    {
        if ($isBadVersion) {
            $prevVersion = $this->currentVersion - 1;
            if (isset($this->versionsCache[$prevVersion]) && !$this->versionsCache[$prevVersion]) {
                return $this->currentVersion;
            }
        } else {
            $nextVersion = $this->currentVersion + 1;
            if (isset($this->versionsCache[$nextVersion]) && $this->versionsCache[$nextVersion]) {
                return $nextVersion;
            }
        }

        return 0;
    }

    /**
     * @return void
     */
    protected function inchCloser($isBadVersion)
    {
        if ($isBadVersion) {
            $this->prevCheckedVersion = $this->currentVersion;
            $this->currentVersion = intval(floor($this->currentVersion / 2));
        } else {
            $this->currentVersion = intval(ceil(($this->currentVersion + $this->prevCheckedVersion) / 2));
        }
    }
}


