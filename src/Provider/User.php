<?php namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\UserInterface;

class User implements UserInterface
{
    /**
     * User imageurl
     *
     * @var string
     */
    protected $imageurl;

    /**
     * User name
     *
     * @var string
     */
    protected $name;

    /**
     * User nickname
     *
     * @var string
     */
    protected $nickname;

    /**
     * User userId
     *
     * @var string
     */
    protected $userId;

    /**
     * User description
     *
     * @var string
     */
    protected $description;

    /**
     * Create new user
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        array_walk($attributes, [$this, 'mergeAttribute']);
    }

    /**
     * Attempt to merge individual attributes with user properties
     *
     * @param  mixed   $value
     * @param  string  $key
     *
     * @return void
     */
    private function mergeAttribute($value, $key)
    {
        $method = 'set'.ucfirst($key);

        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    /**
     * Get user imageurl
     *
     * @return string
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }

    /**
     * Set user imageurl
     *
     * @param  string $imageurl
     *
     * @return this
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;

        return $this;
    }

    /**
     * Get user name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user name
     *
     * @param  string $name
     *
     * @return this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get user nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set user nickname
     *
     * @param  string $nickname
     *
     * @return this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get user userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set user userId
     *
     * @param  string $userId
     *
     * @return this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get user description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user description
     *
     * @param  string $description
     *
     * @return this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
