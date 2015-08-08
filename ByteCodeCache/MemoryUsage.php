<?php

namespace Matthimatiker\OpcacheBundle\ByteCodeCache;

/**
 * Holds information about the memory usage of the cache.
 */
class MemoryUsage
{
    /**
     * Current memory usage in MB.
     *
     * @var double
     */
    protected $usageInMb = null;

    /**
     * Maximal cache size in MB.
     *
     * @var double
     */
    protected $sizeInMb = null;

    /**
     * @param double $usageInMb
     * @param double $sizeInMb
     */
    public function __construct($usageInMb, $sizeInMb)
    {
        $this->usageInMb = $usageInMb;
        $this->sizeInMb  = $sizeInMb;
    }

    /**
     * Returns the current memory usage in MB.
     *
     * @return double
     */
    public function getUsageInMb()
    {
        return $this->usageInMb;
    }

    /**
     * Returns the maximal size of the cache in MB.
     *
     * @return double
     */
    public function getSizeInMb()
    {
        return $this->sizeInMb;
    }

    /**
     * Returns the cache usage in percent.
     *
     * 100% usage means that the cache is full.
     *
     * @return double
     */
    public function getUsageInPercent()
    {
        return ($this->usageInMb / $this->sizeInMb) * 100.0;
    }

    /**
     * Checks if the cache is full.
     *
     * @return boolean
     */
    public function isFull()
    {
        return $this->usageInMb >= $this->sizeInMb;
    }
}