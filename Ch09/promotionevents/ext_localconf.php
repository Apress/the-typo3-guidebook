<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'promotionevents',  // Extension Name
    'Upcoming', // Plugin identifier
    [
        // A group of all controllers and actions for this plugin
        \PromotionTourWebsite\PromotionEvents\Controller\EventsController::class => 'upcoming,detail'
    ],
    [
        // No uncacheable plugin actions
    ]
);
