<?php

declare(strict_types=1);

namespace Infection\Utils;

class TempDirectoryCreator
{
    /**
     * @var string
     */
    private $tempDirectory;

    public function createAndGet() : string
    {
        if ($this->tempDirectory === null) {
            $root = sys_get_temp_dir();
            $path = $root . '/infection';

            if (! @mkdir($path, 0777, true) && !is_dir($path)) {
                throw new \RuntimeException('Can not create temp dir');
            }

            $this->tempDirectory = $path;
        }

        return $this->tempDirectory;
    }
}