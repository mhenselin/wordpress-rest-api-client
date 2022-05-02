<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Users
 * @package Vnn\WpApiClient\Endpoint
 */
class Users extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        // return '/wp-json/wp/v2/users';
        return '/index.php?rest_route=/wp/v2/users';
    }
}
