<?php

namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;

class Instagram extends AbstractProvider
{
    /**
     * Default scopes
     *
     * @var array
     */
    public $defaultScopes = ['basic'];

    /**
     * Get the string used to separate scopes.
     *
     * @return string
     */
    protected function getScopeSeparator()
    {
        return ' ';
    }

    /**
     * Get authorization url to begin OAuth flow
     *
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://api.instagram.com/oauth/authorize';
    }

    /**
     * Get access token url to retrieve token
     *
     * @param  array $params
     *
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://api.instagram.com/oauth/access_token';
    }

    /**
     * Get provider url to fetch user details
     *
     * @param  AccessToken $token
     *
     * @return string
     */
    public function getUserDetailsUrl(AccessToken $token)
    {
        return 'https://api.instagram.com/v1/users/self?access_token='.$token;
    }

    /**
     * Get the default scopes used by this provider.
     *
     * This should not be a complete list of all scopes, but the minimum
     * required for the provider user interface!
     *
     * @return array
     */
    protected function getDefaultScopes()
    {
        return $this->defaultScopes;
    }

    /**
     * Check a provider response for errors.
     *
     * @throws IdentityProviderException
     * @param  ResponseInterface $response
     * @param  string $data Parsed response data
     * @return void
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {

    }

    /**
     * Generate a user object from a successful user details request.
     *
     * @param array $response
     * @param AccessToken $token
     * @return League\OAuth2\Client\Provider\UserInterface
     */
    protected function createUser(array $response, AccessToken $token)
    {
        $description = (isset($response['data']['bio'])) ? $response['data']['bio'] : null;

        $attributes = [
            'userId' => $response['data']['id'],
            'nickname' => $response['data']['username'],
            'name' => $response['data']['full_name'],
            'description' => $description,
            'imageurl' => $response['data']['profile_picture'],
        ];

        return new User($attributes);
    }
}
