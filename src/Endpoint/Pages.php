<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Pages
 * @package Vnn\WpApiClient\Endpoint
 */
class Pages extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        // return '/wp-json/wp/v2/pages';
        return '/index.php?rest_route=/wp/v2/pages';
    }
}
