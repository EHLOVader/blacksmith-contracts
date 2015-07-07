<?php namespace App\Contracts\Instances;

interface InstanceInterface
{
    /**
     * Uniquely identify this object
     *
     * @return int|string
     */
    public function identity();
}
