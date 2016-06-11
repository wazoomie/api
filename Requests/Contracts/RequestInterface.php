<?php

namespace Wazoomie\Api\Requests\Contracts;

use Wazoomie\Api\Managers\Contracts\ApiManagerInterface;

interface RequestInterface
{
    /**
     * Set the Manager.
     *
     * @param ApiManagerInterface $manager
     *
     * @return $this
     */
    public function setManager(ApiManagerInterface $manager);

    /**
     * Get the Manager.
     *
     * @return ApiManagerInterface
     */
    public function getManager();

    /**
     * Get whether the Manager is set.
     *
     * @return bool
     */
    public function hasManager();

    /**
     * Get the Url.
     *
     * @return int
     */
    public function getUrl();

    /**
     * Get the instance.
     *
     * @return $this
     */
    public function get();
}