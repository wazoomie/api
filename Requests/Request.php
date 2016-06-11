<?php

namespace Wazoomie\Api\Requests;

class Request extends AbstractRequest
{
    /**
     * Get the Url.
     *
     * @return int
     */
    public function getUrl()
    {
        return stringbuilder($this->getManager()->getDomain())
            ->append(implode('/', $this->getManager()->getSegments()))
            ->append($this->getManager()->getFile())
            ->append('?')
            ->append(http_build_query($this->getManager()->getParameters()))
            ->toString();
    }
}