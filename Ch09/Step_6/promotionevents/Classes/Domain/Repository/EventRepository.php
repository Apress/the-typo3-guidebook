<?php

namespace PromotionTourWebsite\PromotionEvents\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class EventRepository extends Repository
{
    public function findUpcoming()
    {
        $query = $this->createQuery();
        $query->greaterThan(
            'promotiondate',
            new \DateTime()
        );
        // Show the next three events
        $query->setLimit(3);
        $query->setOrderings(['promotiondate' => QueryInterface::ORDER_ASCENDING]);
        return $query->execute();
    }
}
