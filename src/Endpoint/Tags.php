<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Tags
 * @package Vnn\WpApiClient\Endpoint
 */
class Tags extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        //return '/wp-json/wp/v2/tags';
        return '/index.php?rest_route=/wp/v2/tags';

    }
}
