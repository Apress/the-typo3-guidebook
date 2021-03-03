<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'promotionevents', // Extension Name
    'Upcoming', // Plugin identifier
    'Upcoming Promotion Events', // Label
    'EXT:promotionevents/Resources/Public/Icons/Extension.png' // Icon
);
