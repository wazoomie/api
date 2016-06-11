<?php

namespace Wazoomie\Api\Managers\Contracts;

interface ApiManagerInterface
{
    /**
     * Set the configuration key
     *
     * @param $configuration
     *
     * @return $this;
     */
    public function setConfiguration($configuration);

    /**
     * Get the configuration key.
     *
     * @return string
     */
    public function getConfiguration();

    /**
     * Get whether the configuration key is set.
     *
     * @return bool
     */
    public function hasConfiguration();

    /**
     * Set the domain.
     *
     * @param $domain
     *
     * @return $this;
     */
    public function setDomain($domain);

    /**
     * Get the domain.
     *
     * @return string
     */
    public function getDomain();

    /**
     * Get whether the domain is set.
     *
     * @return bool
     */
    public function hasDomain();

    /**
     * Set the file.
     *
     * @param $file
     *
     * @return $this;
     */
    public function setFile($file);

    /**
     * Get the file.
     *
     * @return string
     */
    public function getFile();

    /**
     * Get whether the file is set.
     *
     * @return bool
     */
    public function hasFile();

    /**
     * Set the segments.
     *
     * @param array $segments
     *
     * @return $this;
     */
    public function setSegments(array $segments = []);

    /**
     * Add a segment.
     *
     * @param $segment
     *
     * @return $this;
     */
    public function addSegment($segment);

    /**
     * Get the segments.
     *
     * @return array
     */
    public function getSegments();

    /**
     * Get a segment by its position.
     *
     * @param $position
     *
     * @return string
     */
    public function getSegment($position);

    /**
     * Get whether the segments are set.
     *
     * @return bool
     */
    public function hasSegments();

    /**
     * Get whether the segment position is set.
     *
     * @param $position
     *
     * @return bool
     */
    public function hasSegment($position);

    /**
     * Set the parameters.
     *
     * @param array $parameters
     *
     * @return $this;
     */
    public function setParameters(array $parameters = []);

    /**
     * Add a parameter.
     *
     * @param $key
     * @param $value
     *
     * @return $this;
     */
    public function addParameter($key, $value);

    /**
     * Get the parameters.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Get a parameter by its key.
     *
     * @param $key
     *
     * @return string
     */
    public function getParameter($key);

    /**
     * Get whether the parameters are set.
     *
     * @return bool
     */
    public function hasParameters();

    /**
     * Get whether the parameter key is set.
     *
     * @param $key
     *
     * @return bool
     */
    public function hasParameter($key);
}