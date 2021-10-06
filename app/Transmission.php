<?php


namespace App;


class Transmission
{
    protected $numberOfGears;
    protected $currentGear;
    protected $previousGear;

    public function __construct(int $numberOfGears)
    {
        $this->numberOfGears = $numberOfGears;
        $this->currentGear = 0;
    }

    public function gearUp()
    {
        if ($this->currentGear < $this->numberOfGears)
        {
            $this->currentGear = $this->currentGear + 1;
            if ($this->currentGear == $this->numberOfGears)
            {
                echo "the last gear selected".PHP_EOL;
            }
            echo "current gear: $this->currentGear".PHP_EOL;
        }
        else
        {
            echo "the last gear is already selected".PHP_EOL;
        }
    }

    public function gearDown()
    {
        if ($this->currentGear > 0)
        {
            $this->currentGear = $this->currentGear - 1;

            if ($this->currentGear == 0)
            {
                echo "neutral gear selected".PHP_EOL;
            }
            else
            {
                echo "current gear: $this->currentGear".PHP_EOL;
            }
        }
        else
        {
            echo "already selected neutral gear".PHP_EOL;
        }
    }

    public function gearNeutral()
    {
//        $this->setPreviousGear($this->getCurrentGear());
        $this->previousGear = $this->currentGear;
        $this->currentGear = 0;
        echo "neutral gear selected".PHP_EOL;
    }

    public function gearReverse()
    {
        $this->currentGear = -1;
        echo "reverse gear selected".PHP_EOL;
    }

    public function getNumberOfGears()
    {
        return $this->numberOfGears;
    }

    /**
     * @return int
     */
    public function getCurrentGear(): int
    {
        return $this->currentGear;
    }

    /**
     * @return mixed
     */
    public function getPreviousGear()
    {
        return $this->previousGear;
    }

    /**
     * @param mixed $previousGear
     */
    public function setPreviousGear($previousGear): void
    {
        $this->previousGear = $previousGear;
    }

    /**
     * @param int $currentGear
     */
    public function setCurrentGear(int $currentGear): void
    {
        $this->currentGear = $currentGear;
    }
}