<?php

declare(strict_types=1);

namespace Infection\Events;


use Infection\Process\MutantProcess;

class MutantProcessFinished
{
    /**
     * @var MutantProcess
     */
    private $mutantProcess;

    public function __construct(MutantProcess $mutantProcess)
    {
        $this->mutantProcess = $mutantProcess;
    }

    /**
     * @return MutantProcess
     */
    public function getMutantProcess(): MutantProcess
    {
        return $this->mutantProcess;
    }
}