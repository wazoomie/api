<?php

namespace Wazoomie\Api\Managers;

use Wazoomie\Api\Requests\Contracts\RequestInterface;
use Wazoomie\Api\Responses\Contracts\ResponseInterface;
use Wazoomie\Support\Contracts\FactoryInterface;

abstract class AbstractApiManager implements Contracts\ApiManagerInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @var string
     */
    protected $configuration;

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var int
     */
    protected $cacheExpiry = 10;

    /**
     * @var array
     */
    protected $segments = [];

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var array
     */
    protected $basicAuth = [];

    /**
     * @var FactoryInterface
     */
    protected $factory;

    public function __construct(RequestInterface $request, ResponseInterface $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Set the configuration key
     *
     * @param $configuration
     *
     * @return $this;
     * @throws \Exception
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = (string) $configuration;

        if (!(config($this->configuration))) {
            throw new \Exception("The configuration section [{$this->configuration}] was not found.");
        }

        if (config("{$this->configuration}.domain")) {
            $this->domain = (string) config("{$this->configuration}.domain");
        }

        if (config("{$this->configuration}.file")) {
            $this->file = (string) config("{$this->configuration}.file");
        }

        if (config("{$this->configuration}.parameters")) {
            $this->parameters = (array) config("{$this->configuration}.parameters");
        }

        if (config("{$this->configuration}.segments")) {
            $this->segments = (array) config("{$this->configuration}.segments");
        }

        if (config("{$this->configuration}.factory")) {
            $this->factory = config("{$this->configuration}.factory");
        }

        if (config("{$this->configuration}.cache")) {
            $this->cacheExpiry = (int) config("{$this->configuration}.cache");
        }

        return $this;
    }

    /**
     * Get the configuration key.
     *
     * @return string
     */
    public function getConfiguration()
    {
        return (string) $this->configuration;
    }

    /**
     * Get whether the configuration key is set.
     *
     * @return bool
     */
    public function hasConfiguration()
    {
        return (bool) $this->configuration;
    }

    /**
     * Set the domain.
     *
     * @param $domain
     *
     * @return $this;
     */
    public function setDomain($domain)
    {
        $this->domain = (string) $domain;
        return $this;
    }

    /**
     * Get the domain.
     *
     * @return string
     */
    public function getDomain()
    {
        return (string) $this->domain;
    }

    /**
     * Get whether the domain is set.
     *
     * @return bool
     */
    public function hasDomain()
    {
        return (bool) $this->domain;
    }

    /**
     * Set the file.
     *
     * @param $file
     *
     * @return $this;
     */
    public function setFile($file)
    {
        $this->file = (string) $file;
        return $this;
    }

    /**
     * Get the file.
     *
     * @return string
     */
    public function getFile()
    {
        return (string) $this->file;
    }

    /**
     * Get whether the file is set.
     *
     * @return bool
     */
    public function hasFile()
    {
        return (bool) $this->file;
    }

    /**
     * Set the segments.
     *
     * @param array $segments
     *
     * @return $this;
     */
    public function setSegments(array $segments = [])
    {
        $this->segments = (array) $segments;
        return $this;
    }

    /**
     * Add a segment.
     *
     * @param $segment
     *
     * @return $this;
     */
    public function addSegment($segment)
    {
        $this->segments[] = (string) $segment;
        return $this;
    }

    /**
     * Get the segments.
     *
     * @return array
     */
    public function getSegments()
    {
        return (array) $this->segments;
    }

    /**
     * Get a segment by its position.
     *
     * @param $position
     *
     * @return string
     */
    public function getSegment($position)
    {
        return (string) $this->segments[$position];
    }

    /**
     * Get whether the segments are set.
     *
     * @return bool
     */
    public function hasSegments()
    {
        return (bool) $this->segments;
    }

    /**
     * Get whether the segment position is set.
     *
     * @param $position
     *
     * @return bool
     */
    public function hasSegment($position)
    {
        return (bool) $this->segments[$position];
    }

    /**
     * Set the parameters.
     *
     * @param array $parameters
     *
     * @return $this;
     */
    public function setParameters(array $parameters = [])
    {
        $this->parameters = (array) $parameters;
        return $this;
    }

    /**
     * Add a parameter.
     *
     * @param $key
     * @param $value
     *
     * @return $this;
     */
    public function addParameter($key, $value)
    {
        $this->parameters[$key] = (string) $value;
        return $this;
    }

    /**
     * Get the parameters.
     *
     * @return array
     */
    public function getParameters()
    {
        return (array) $this->parameters;
    }

    /**
     * Get a parameter by its key.
     *
     * @param $key
     *
     * @return string
     */
    public function getParameter($key)
    {
        return (string) $this->segments[$key];
    }

    /**
     * Get whether the parameters are set.
     *
     * @return bool
     */
    public function hasParameters()
    {
        return (bool) $this->parameters;
    }

    /**
     * Get whether the parameter key is set.
     *
     * @param $key
     *
     * @return bool
     */
    public function hasParameter($key)
    {
        return (bool) $this->parameters[$key];
    }

    /**
     * Set the factory.
     *
     * @param $factory
     *
     * @return $this;
     */
    public function setFactory(FactoryInterface $factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * Get the factory.
     *
     * @return FactoryInterface
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Get whether the factory is set.
     *
     * @return bool
     */
    public function hasFactory()
    {
        return (bool) $this->factory;
    }

    /**
     * Set the Basic Auth username.
     *
     * @param $username
     *
     * @return $this;
     */
    public function setBasicAuthUsername($username)
    {
        $this->basicAuth['username'] = (string) $username;
        return $this;
    }

    /**
     * Get the Basic Auth username.
     *
     * @return string
     */
    public function getBasicAuthUsername()
    {
        return (string) $this->basicAuth['username'];
    }

    /**
     * Get whether the Basic Auth username is set.
     *
     * @return bool
     */
    public function hasBasicAuthUsername()
    {
        return (bool) $this->basicAuth['username'];
    }

    /**
     * Set the Basic Auth password.
     *
     * @param $password
     *
     * @return $this;
     */
    public function setBasicAuthPassword($password)
    {
        $this->basicAuth['password'] = (string) $password;
        return $this;
    }

    /**
     * Get the Basic Auth password.
     *
     * @return string
     */
    public function getBasicAuthPassword()
    {
        return (string) $this->basicAuth['password'];
    }

    /**
     * Get whether the Basic Auth password is set.
     *
     * @return bool
     */
    public function hasBasicAuthPassword()
    {
        return (bool) $this->basicAuth['password'];
    }

    /**
     * Get the Basic Auth Curl string.
     *
     * @return string
     */
    public function getBasicAuthCurlString()
    {
        return $this->basicAuth['username'] . ':' . $this->basicAuth['password'];
    }

    /**
     * Set the expiry time of the cache.
     *
     * @param $time
     *
     * @return $this;
     */
    public function setCacheExpiryTime($time)
    {
        $this->cacheExpiry = (int) $time;
        return $this;
    }

    /**
     * Get the expiry time of the cache.
     *
     * @return int
     */
    public function getCacheExpiryTime()
    {
        return (int) $this->cacheExpiry;
    }

    /**
     * Get whether the expiry time of the cache is set.
     *
     * @return bool
     */
    public function hasCacheExpiryTime()
    {
        return (bool) $this->cacheExpiry;
    }

    /**
     * Get the (processed) Response data.
     *
     * @return \Illuminate\Support\Collection
     */
    public function get()
    {
        $request    = $this->request->setManager($this)->get();

        return app()->cache->remember('test', $this->getCacheExpiryTime(), function() use ($request) {
            $response = $this->response->setRequest($request)->response();

            if ($this->factory) {
                $response = $this->factory->setData($response)->process();
            }

            return $response;
        });
    }
}
