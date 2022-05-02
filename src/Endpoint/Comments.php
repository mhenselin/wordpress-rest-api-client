<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Comments
 * @package Vnn\WpApiClient\Endpoint
 */
class Comments extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        // return '/wp-json/wp/v2/comments';
        return '/index.php?rest_route=/wp/v2/comments';
    }
}
