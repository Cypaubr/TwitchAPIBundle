<?php

namespace Cypaubr\TwitchAPIBundle\Model;

/**
 * This class represents a Twitch channel
 * @package Cypaubr\TwitchAPIBundle\Model
 */
class Channel
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $broadcasterLanguage;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var integer
     */
    protected $followers;

    /**
     * @var string
     */
    protected $game;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var boolean
     */
    protected $mature;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $partner;

    /**
     * @var string
     */
    protected $profileBanner;

    /**
     * @var string
     */
    protected $profileBannerBackgroundColor;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $videoBanner;

    /**
     * @var integer
     */
    protected $views;

    /**
     * @var string
     */
    protected $broadcasterType;

    /**
     * @var string
     */
    protected $streamKey;

    /**
     * @var string
     */
    protected $email;

    /**
     * Channel constructor.
     * @param $jsonResponseObject
     * @throws \Exception
     */
    public function __construct($jsonResponseObject)
    {
        if ($jsonResponseObject === null || sizeof($jsonResponseObject) <= 0){
            throw new \Exception("Null JSON response object received.");
        }

        $jsonResponseObject = json_decode($jsonResponseObject);
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
    public function getBroadcasterLanguage()
    {
        return $this->broadcasterLanguage;
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
     * @return int
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return bool
     */
    public function isMature()
    {
        return $this->mature;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isPartner()
    {
        return $this->partner;
    }

    /**
     * @return string
     */
    public function getProfileBanner()
    {
        return $this->profileBanner;
    }

    /**
     * @return string
     */
    public function getProfileBannerBackgroundColor()
    {
        return $this->profileBannerBackgroundColor;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getVideoBanner()
    {
        return $this->videoBanner;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return string
     */
    public function getBroadcasterType()
    {
        return $this->broadcasterType;
    }

    /**
     * @return string
     */
    public function getStreamKey()
    {
        return $this->streamKey;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}