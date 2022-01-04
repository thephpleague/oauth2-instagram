<?php

namespace League\OAuth2\Client\Grant;

class IgRefreshToken extends AbstractGrant
{
    public function __toString()
    {
        return 'ig_refresh_token';
    }

    protected function getRequiredRequestParameters()
    {
        return [
            'access_token',
        ];
    }

    protected function getName()
    {
        return 'ig_refresh_token';
    }
}
