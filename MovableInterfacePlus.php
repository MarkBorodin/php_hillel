<?php


interface MovableInterfacePlus
{
    /**
     * Включает нейтральную передачу
     * @return mixed
     */
    public function neutral();

    /**
     * Включает заднюю передачу
     * @return mixed
     */
    public function reverse();
}