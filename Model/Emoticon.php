<?php

namespace Cypaubr\TwitchAPIBundle\Model;

/**
 * This class defined an emoticon in Twitch API
 * @package Cypaubr\TwitchAPIBundle\Model
 */
class Emoticon
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $regex;

    /**
     * @var integer
     */
    protected $width,$height;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var integer
     */
    protected $emoticonSet;

    /**
     * Emoticon constructor.
     * @param $jsonRequestObject
     * @throws \Exception
     */
    public function __construct($jsonRequestObject)
    {
        if ($jsonRequestObject === null || sizeof($jsonRequestObject) <= 0){
            throw new \Exception("Null JSON request given.");
        }

        $jsonRequestObject = json_decode($jsonRequestObject,true);
        foreach ($jsonRequestObject as $field){
            $this -> $field = $jsonRequestObject[$field];
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
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getEmoticonSet()
    {
        return $this->emoticonSet;
    }
}