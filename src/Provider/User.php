<?php namespace League\OAuth2\Client\Provider;

/**
 * @property array $response
 * @property string $uid
 */
class User extends StandardUser
{
    /**
     * Get user imageurl
     *
     * @return string
     */
    public function getImageurl()
    {
        return $this->response['data']['profile_picture'] ?: null;
    }

    /**
     * Get user name
     *
     * @return string
     */
    public function getName()
    {
        return $this->response['data']['full_name'] ?: null;
    }

    /**
     * Get user nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->response['data']['username'] ?: null;
    }

    /**
     * Get user userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->uid;
    }

    /**
     * Get user description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->response['data']['bio'] ?: null;
    }
}
