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
        // Check if the response makes use of CURL.
        if ($this->getRequest()->getManager()->hasBasicAuthUsername()) {
            $process = curl_init();
            curl_setopt($process, CURLOPT_URL, $this->getRequest()->getUrl());
            curl_setopt($process, CURLOPT_USERPWD, $this->getRequest()->getManager()->getBasicAuthCurlString());
            curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($process);

            switch (strtolower($this->getRequest()->getManager()->getResponseType())) {
                case 'xml':
                    $response = json_decode(json_encode(simplexml_load_string($response)), true);
                    break;
                default:
                    $response = json_decode($response, true);
            }

            // Use JSON as default.
        } else {
            $response = file_get_contents($this->getRequest()->getUrl());
            $response = json_decode($response, true);
        }

        // Extract a certain section of the response.
        if ($keys = $this->getRequest()->getManager()->getResponsePath()) {
            foreach ($keys as $key) {
                $response = $response[$key];
            }
        }

        return $response;
    }
}