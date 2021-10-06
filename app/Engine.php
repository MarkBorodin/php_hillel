<?php


namespace App;


class Engine
{
    protected $enginePower;
    protected $isEngineRunningNow;
    protected $mximumSpeed;

    public function __construct(int $enginePower)
    {
        $this->enginePower = $enginePower;
        $this->isEngineRunningNow = false;
        $this->setMximumSpeed();
    }

    public function startEngine()
    {
        if ($this->isEngineRunningNow == false)
        {
            $this->isEngineRunningNow = true;
            echo "engine started".PHP_EOL;
        }
        else
        {
            echo "the engine is already started".PHP_EOL;
        }
    }

    public function stopEngine()
    {
        if ($this->isEngineRunningNow == true)
        {
            $this->isEngineRunningNow = false;
            echo "engine off".PHP_EOL;
        }
        else
        {
            echo "the engine is already turned off".PHP_EOL;
        }
    }

    public function getEnginePower()
    {
        return $this->enginePower;
    }

    protected function setMximumSpeed()
    {
        $this->mximumSpeed = 100 + $this->enginePower / 2;
    }

    public function getMximumSpeed()
    {
        return $this->mximumSpeed;
    }

    /**
     * @return false
     */
    public function getIsEngineRunningNow(): bool
    {
        return $this->isEngineRunningNow;
    }
}
