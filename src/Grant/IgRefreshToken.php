<?php

namespace League\OAuth2\Client\Grant;

class IgRefreshToken extends AbstractGrant
{
    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return 'ig_refresh_token';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'access_token',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'ig_refresh_token';
    }
}
