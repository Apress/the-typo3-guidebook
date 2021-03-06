<?php

namespace PromotionTourWebsite\PromotionEvents\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Event extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $promotiondate;

    /**
     * @var \DateTime
     */
    protected $promotiontime;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $locationlink;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return \DateTime
     */
    public function getPromotiondate(): \DateTime
    {
        return $this->promotiondate;
    }

    /**
     * @return \DateTime
     */
    public function getPromotiontime(): \DateTime
    {
        return $this->promotiontime;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getLocationlink(): string
    {
        return $this->locationlink;
    }
}
