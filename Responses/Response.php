<?php

namespace Wazoomie\Api\Responses;

class Response extends AbstractResponse
{
    /**
     * Get the response from the Request.
     *
     * @return array
     */
    public function response()
    {
        $content = file_get_contents($this->getRequest()->getUrl());
        $content = json_decode($content, true);

        return $content;
    }
}