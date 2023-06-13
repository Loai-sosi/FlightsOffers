<?php

namespace App\Http\Integrations\Amedues\Requests;

use App\Http\Integrations\Amedues\AmeduesConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListDestinationsRequest extends Request
{

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected ?string $connector = AmeduesConnector::class;
    protected Method $method = Method::GET;

    public function __construct(public string $origin, public string $maxPrice)
    {

    }

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/shopping/flight-destinations?origin=' .$this->origin. '&maxPrice=' . $this->maxPrice;
    }



}
