<?php

namespace PromotionTourWebsite\PromotionEvents\Controller;

use PromotionTourWebsite\PromotionEvents\Domain\Model\Event;
use PromotionTourWebsite\PromotionEvents\Domain\Repository\EventRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class EventsController extends ActionController
{
    /**
     * @var EventRepository
     */
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function upcomingAction()
    {
        $upcomingEvents = $this->eventRepository->findUpcoming();
        $this->view->assign('upcomingEvents', $upcomingEvents);
    }

    public function detailAction(Event $event)
    {
        $this->view->assign('event', $event);
    }
}
