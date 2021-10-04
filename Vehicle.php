<?php


include 'MovableInterface.php';
include 'MovableInterfacePlus.php';
include 'Engine.php';
include 'Transmission.php';


abstract class Vehicle implements MovableInterface, MovableInterfacePlus
{
    /**
     * @var Transmission
     */
    protected $transmission;
    /**
     * @var Engine
     */
    protected $engine;
    /**
     * @var int
     */
    protected $speed;
    const ACCELERATION_STEP = 20;

    /**
     * @param $enginePower
     * @param $numberOfGears
     */
    public function __construct($enginePower, $numberOfGears)
    {
        $this->engine = new Engine($enginePower);
        $this->transmission = new Transmission($numberOfGears);
        $this->enginePower = $enginePower;
        $this->numberOfGears = $numberOfGears;
        $this->speed = 0;
    }

    /**
     * Включает зажигание
     * @return mixed
     */
    public function start()
    {
        $this->engine->startEngine();
    }

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop()
    {
        $this->engine->stopEngine();
        $this->speed = 0;

    }

    /**
     * Увеличивает скорость движения
     * @return mixed
     */
    public function up()
    {
        if ($this->transmission->getCurrentGear() == 0 and $this->speed != 0)
        {
            $this->transmission->setCurrentGear($this->transmission->getPreviousGear());
        }

        if($this->engine->getIsEngineRunningNow() and $this->transmission->getCurrentGear() < $this->transmission->getNumberOfGears())
        {
            $this->transmission->gearUp();
            if ($this->transmission->getCurrentGear() == $this->transmission->getNumberOfGears())
            {
                $this->speed = $this->engine->getMximumSpeed();
                echo "maximum speed reached: $this->speed ".PHP_EOL;
            }
            else
            {
                $this->speed = $this->speed + self::ACCELERATION_STEP;
                echo "current speed: $this->speed ".PHP_EOL;
            }
        }
        else
        {
            echo "engine not started or maximum gear reached".PHP_EOL;
        }

    }

    /**
     * Уменьшает скорость движения
     * @return mixed
     */
    public function down()
    {
        if ($this->transmission->getCurrentGear() == 0 and $this->speed != 0)
        {
            $this->transmission->setCurrentGear($this->transmission->getPreviousGear());
        }

        if($this->engine->getIsEngineRunningNow() and $this->transmission->getCurrentGear() > 0)
        {
            if ($this->transmission->getCurrentGear() == $this->transmission->getNumberOfGears())
            {
                $this->transmission->gearDown();
                $this->speed = $this->transmission->getCurrentGear() * self::ACCELERATION_STEP;
            }
            else
            {
                $this->transmission->gearDown();

                $this->speed = $this->speed - self::ACCELERATION_STEP;
            }

            echo "current speed: $this->speed ".PHP_EOL;
        }
        else
        {
            echo "engine not started or or minimum gear reached".PHP_EOL;
        }

    }

    /**
     * Включает нейтральную передачу
     * @return mixed
     */
    public function neutral()
    {
        if($this->engine->getIsEngineRunningNow())
        {
            if ($this->speed == 20)
            {
                $this->transmission->gearNeutral();
            }
            echo "current speed: $this->speed ".PHP_EOL;
        }
        else
        {
            echo "engine not started".PHP_EOL;
        }
    }

    /**
     * Включает заднюю передачу
     * @return mixed
     */
    public function reverse()
    {
        if($this->engine->getIsEngineRunningNow())
        {
            if ($this->getSpeed() > 0)
            {
                echo "you cannot reverse gear while driving".PHP_EOL;
            }
            else
            {
                $this->transmission->gearReverse();
            }
        }
        else
        {
            echo "engine not started".PHP_EOL;
        }

    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}