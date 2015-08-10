<?php

namespace Matthimatiker\OpcacheBundle\ByteCodeCache;

/**
 * Cache implementation that is filled with static data.
 */
class StaticCacheData implements ByteCodeCacheInterface
{
    /**
     * @var boolean
     */
    protected $enabled = null;

    /**
     * @var MemoryUsage
     */
    protected $memory = null;

    /**
     * @var Statistics
     */
    protected $statistics = null;

    /**
     * @param boolean $enabled
     * @param MemoryUsage $memory
     * @param Statistics $statistics
     * @param array $cachedScripts
     */
    public function __construct($enabled, MemoryUsage $memory, Statistics $statistics, array $cachedScripts = array())
    {
        $this->enabled    = $enabled;
        $this->memory     = $memory;
        $this->statistics = $statistics;
    }

    /**
     * Checks if the byte code cache is active.
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Provides information about the memory usage.
     *
     * @return MemoryUsage
     */
    public function memory()
    {
        return $this->memory;
    }

    /**
     * Provides caching statistics.
     *
     * @return Statistics
     */
    public function statistics()
    {
        return $this->statistics;
    }

    public function getCachedScripts()
    {
        // TODO: Implement getCachedScripts() method.
    }
}