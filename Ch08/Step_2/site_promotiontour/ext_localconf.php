<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems {
        common.elements.bookquote {
            title = Book Quote
            description = What other people are saying
            tt_content_defValues.CType = bookquote
            iconIdentifier = content-text
        }
        common.show := addToList(bookquote)
    }
');
