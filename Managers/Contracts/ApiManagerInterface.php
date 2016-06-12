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

    /**
     * Set the Basic Auth username.
     *
     * @param $username
     *
     * @return $this;
     */
    public function setBasicAuthUsername($username);

    /**
     * Get the Basic Auth username.
     *
     * @return string
     */
    public function getBasicAuthUsername();

    /**
     * Get whether the Basic Auth username is set.
     *
     * @return bool
     */
    public function hasBasicAuthUsername();

    /**
     * Set the Basic Auth password.
     *
     * @param $password
     *
     * @return $this;
     */
    public function setBasicAuthPassword($password);

    /**
     * Get the Basic Auth password.
     *
     * @return string
     */
    public function getBasicAuthPassword();

    /**
     * Get whether the Basic Auth password is set.
     *
     * @return bool
     */
    public function hasBasicAuthPassword();

    /**
     * Get the Basic Auth Curl string.
     *
     * @return string
     */
    public function getBasicAuthCurlString();

    /**
     * Set the expiry time of the cache.
     *
     * @param $time
     *
     * @return $this;
     */
    public function setCacheExpiryTime($time);

    /**
     * Get the expiry time of the cache.
     *
     * @return int
     */
    public function getCacheExpiryTime();

    /**
     * Get whether the expiry time of the cache is set.
     *
     * @return bool
     */
    public function hasCacheExpiryTime();

    /**
     * Set the response type.
     *
     * @param $responseType
     *
     * @return $this;
     */
    public function setResponseType($responseType);

    /**
     * Get the response type.
     *
     * @return string
     */
    public function getResponseType();

    /**
     * Get whether the response type is set.
     *
     * @return bool
     */
    public function hasResponseType();

    /**
     * Set the response path, this section will be extracted from the Response.
     *
     * @param array $responsePath
     *
     * @return $this;
     */
    public function setResponsePath(array $responsePath);

    /**
     * Get the response path of the Response.
     *
     * @return array
     */
    public function getResponsePath();

    /**
     * Get whether the response path of the Response is set.
     *
     * @return bool
     */
    public function hasResponsePath();
}