<?php

namespace Cypaubr\TwitchAPIBundle\Model;

class User
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $bio;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var boolean
     */
    protected $emailVerified;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $notifications;

    /**
     * @var boolean
     */
    protected $partnered;

    /**
     * @var boolean
     */
    protected $twitterConnected;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * User constructor.
     * @param $jsonResponseObject
     * @throws \Exception
     */
    public function __construct($jsonResponseObject)
    {
        if ($jsonResponseObject === null || sizeof($jsonResponseObject) <= 0){
            throw new \Exception("Null JSON response object received.");
        }

        $jsonResponseObject = json_decode($jsonResponseObject,true);
        foreach ($jsonResponseObject as $field){
            $this -> $field = $jsonResponseObject[$field];
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function isEmailVerified()
    {
        return $this->emailVerified;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @return bool
     */
    public function isPartnered()
    {
        return $this->partnered;
    }

    /**
     * @return bool
     */
    public function isTwitterConnected()
    {
        return $this->twitterConnected;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}