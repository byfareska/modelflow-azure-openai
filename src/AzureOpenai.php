<?php declare(strict_types=1);

namespace Byfareska\Modelflow\AzureOpenaiAdapter;

use OpenAI\Client;
use OpenAI\Factory;

final readonly class AzureOpenai
{
    /**
     * Creates a new Open AI Client with the given API token.
     * @see \OpenAI an inspiration for this method
     */
    public static function client(string $endpoint, string $apiKey, ?string $organization = null, string $apiVersion = '2024-06-01'): Client
    {
        return self::factory()
            ->withBaseUri($endpoint)
            ->withQueryParam('api-version', $apiVersion)
            ->withHttpHeader('api-key', $apiKey)
            ->withOrganization($organization)
            ->withHttpHeader('OpenAI-Beta', 'assistants=v1')
            ->make();
    }

    /**
     * Creates a new factory instance to configure a custom Open AI Client
     */
    public static function factory(): Factory
    {
        return new Factory;
    }
}