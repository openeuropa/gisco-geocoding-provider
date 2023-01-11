<?php

declare(strict_types=1);

namespace OpenEuropa\Provider\GiscoGeocoding\Tests;

use Geocoder\IntegrationTest\ProviderIntegrationTest;
use Geocoder\Provider\Provider;
use OpenEuropa\Provider\GiscoGeocoding\GiscoGeocodingProvider;
use Psr\Http\Client\ClientInterface;

/**
 * Integration test for the GISCO Geocoding Provider.
 *
 * @internal
 * @coversNothing
 */
final class IntegrationTest extends ProviderIntegrationTest
{
    /**
     * {@inheritdoc}
     */
    protected $testIpv4 = false;

    /**
     * {@inheritdoc}
     */
    protected $testIpv6 = false;

    /**
     * {@inheritdoc}
     */
    protected $testReverse = false;

    /**
     * {@inheritdoc}
     */
    protected function createProvider(ClientInterface $httpClient): Provider
    {
        return new GiscoGeocodingProvider($httpClient);
    }

    /**
     * {@inheritdoc}
     */
    protected function getCacheDir(): ?string
    {
        return __DIR__ . '/../.cached_responses';
    }

    /**
     * {@inheritdoc}
     */
    protected function getApiKey(): ?string
    {
        return null;
    }
}
