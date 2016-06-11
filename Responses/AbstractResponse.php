<?php

namespace Wazoomie\Api\Responses;

use Wazoomie\Api\Requests\Contracts\RequestInterface;

abstract class AbstractResponse implements Contracts\ResponseInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Set the Request.
     *
     * @param RequestInterface $request
     *
     * @return $this
     */
    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Get the Request.
     *
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Get whether the Request is set.
     *
     * @return bool
     */
    public function hasRequest()
    {
        return (bool) $this->request;
    }

    /**
     * Get the response from the Request.
     *
     * @return mixed
     */
    abstract public function response();
}