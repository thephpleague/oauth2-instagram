<?php

namespace League\OAuth2\Client\Grant;

class IgExchangeToken extends AbstractGrant
{
    public function __toString()
    {
        return 'ig_exchange_token';
    }

    protected function getRequiredRequestParameters()
    {
        return [
            'access_token',
        ];
    }

    protected function getName()
    {
        return 'ig_exchange_token';
    }
}
