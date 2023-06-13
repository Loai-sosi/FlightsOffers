<?php

namespace App\Http\Integrations\Amedues;

use Saloon\Http\Connector;

class AmeduesConnector extends Connector
{
    public function __construct($token)
    {
        $this->withTokenAuth($token);
    }

    /**
     * The Base URL of the API
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return 'https://test.api.amadeus.com/v1';
    }

    /**
     * Default headers for every request
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [
            "Content-Type" => "application/x-www-form-urlencoded",
           // "Authorization" => "Bearer 6gd9O8DcpBtqOHF4wYUYOoA1Pq0w"
        ];
    }

    /**
     * Default HTTP client options
     *
     * @return string[]
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
