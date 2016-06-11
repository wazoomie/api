<?php

namespace Wazoomie\Api\Requests;

use Wazoomie\Api\Managers\Contracts\ApiManagerInterface;

abstract class AbstractRequest implements Contracts\RequestInterface
{
    /**
     * @var ApiManagerInterface
     */
    protected $manager;

    /**
     * Set the Manager.
     *
     * @param ApiManagerInterface $manager
     *
     * @return $this
     */
    public function setManager(ApiManagerInterface $manager)
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * Get the Manager.
     *
     * @return ApiManagerInterface
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Get whether the Manager is set.
     *
     * @return bool
     */
    public function hasManager()
    {
        return (bool) $this->manager;
    }

    /**
     * Get the Url.
     *
     * @return int
     */
    abstract public function getUrl();

    /**
     * Get the instance.
     *
     * @return $this
     */
    public function get()
    {
        return $this;
    }
}