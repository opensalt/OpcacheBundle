<?php

namespace Matthimatiker\OpcacheBundle\ByteCodeCache;

/**
 * Holds statistics about the cache.
 */
class Statistics
{
    /**
     * Number of cache hits.
     *
     * @var integer
     */
    protected $hits = null;

    /**
     * Number of cache misses.
     *
     * @var integer
     */
    protected $misses = null;

    /**
     * @param integer $hits
     * @param integer $misses
     */
    public function __construct($hits, $misses)
    {
        $this->hits   = $hits;
        $this->misses = $misses;
    }

    /**
     * Returns the number of cache hits.
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Returns the number of cache misses.
     *
     * @return integer
     */
    public function getMisses()
    {
        return $this->misses;
    }

    /**
     * Returns the number of cache requests (hits and misses).
     *
     * @return integer
     */
    public function getRequests()
    {
        return $this->hits + $this->misses;
    }

    /**
     * Returns the cache hit rate in percent.
     *
     * @return double
     */
    public function getHitRateInPercent()
    {
        return $this->getPercentageOfRequests($this->hits);
    }

    /**
     * Returns the cache miss rate in percent.
     *
     * @return double
     */
    public function getMissRateInPercent()
    {
        return $this->getPercentageOfRequests($this->misses);
    }

    /**
     * Returns the relation of $value to cache requests in percent.
     *
     * @param integer $value
     * @return double
     */
    protected function getPercentageOfRequests($value)
    {
        if ($this->getRequests() === 0) {
            return 0.0;
        }
        return ($value / $this->getRequests()) * 100.0;
    }
}
