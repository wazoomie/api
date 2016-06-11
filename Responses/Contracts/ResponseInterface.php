<?php

namespace Wazoomie\Api\Responses\Contracts;

use Wazoomie\Api\Requests\Contracts\RequestInterface;

interface ResponseInterface
{
    /**
     * Set the Request.
     *
     * @param RequestInterface $request
     *
     * @return $this
     */
    public function setRequest(RequestInterface $request);

    /**
     * Get the Request.
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Get whether the Request is set.
     *
     * @return bool
     */
    public function hasRequest();

    /**
     * Get the response from the Request.
     *
     * @return mixed
     */
    public function response();
}