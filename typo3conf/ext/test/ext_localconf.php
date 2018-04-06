<?php
if (!defined ("TYPO3_MODE")) {
    die ("Access denied.");
}

// Automatically include the Page TSconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "<INCLUDE_TYPOSCRIPT: source=\"FILE:EXT:{$_EXTKEY}/Configuration/TSconfig/IncludePage.ts\">"
);