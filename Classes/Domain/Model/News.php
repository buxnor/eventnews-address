<?php

namespace GeorgRinger\EventnewsAddress\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{


    /**
     * @var \FriendsOfTYPO3\TtAddress\Domain\Model\Address
     */
    protected $organizerAddress = null;


    /**
     * @var \FriendsOfTYPO3\TtAddress\Domain\Model\Address
     */
    protected $locationAddress = null;

    /**
     * @return \FriendsOfTYPO3\TtAddress\Domain\Model\Address
     */
    public function getOrganizerAddress(): ?\FriendsOfTYPO3\TtAddress\Domain\Model\Address
    {
        return $this->organizerAddress;
    }

    /**
     * @param \FriendsOfTYPO3\TtAddress\Domain\Model\Address $organizerAddress
     */
    public function setOrganizerAddress(?\FriendsOfTYPO3\TtAddress\Domain\Model\Address $organizerAddress): void
    {
        $this->organizerAddress = $organizerAddress;
    }

    /**
     * @return \FriendsOfTYPO3\TtAddress\Domain\Model\Address
     */
    public function getLocationAddress(): ?\FriendsOfTYPO3\TtAddress\Domain\Model\Address
    {
        return $this->locationAddress;
    }

    /**
     * @param \FriendsOfTYPO3\TtAddress\Domain\Model\Address $locationAddress
     */
    public function setLocationAddress(?\FriendsOfTYPO3\TtAddress\Domain\Model\Address $locationAddress): void
    {
        $this->locationAddress = $locationAddress;
    }


}
