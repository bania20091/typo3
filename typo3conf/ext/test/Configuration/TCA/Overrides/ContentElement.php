<?php
if (!defined ("TYPO3_MODE")) {
    die ("Access denied.");
}

$_EXTKEY = "test";
$_MODEL_NAME = "ContentElement";
$_TABLE_NAME = "tt_content";
$_PLUGIN_PREFIX = "test";

// Custom palettes
$GLOBALS["TCA"][$_TABLE_NAME]["palettes"]["{$_PLUGIN_PREFIX}_head"] = array(
    "showitem" => "CType,colPos,--linebreak--,l10n_parent",
    "canNotCollapse" => 1
);

// Add "Panel" element
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    "tt_content",
    "CType",
    [
        "LLL:EXT:{$_EXTKEY}/Resources/Private/Language/{$_MODEL_NAME}.xlf:{$_PLUGIN_PREFIX}_panel.title",
        "{$_PLUGIN_PREFIX}_panel",
        "content-text"
    ],
    "textmedia",
    "after"
);

$subheader = array(
    'subheader' => array (
        'exclude' => 0,
        'label' => 'Sub Header',
        'config' => array (
            'type' => 'input',
        )
    ),
    'btn' => array(
        'exclude' => 0,
        'label' => 'Btn Text',
        'config' => array (
            'type' => 'input',
        )
    ),
    'btn_link' => array(
        'label' => 'Btn Text',
        'config' => array (
            'type' => 'input',
            'renderType' => 'inputLink',
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $subheader
);


$GLOBALS["TCA"]["tt_content"]["types"]["{$_PLUGIN_PREFIX}_panel"]["columnsOverrides"]["bodytext"]["defaultExtras"] = "richtext:rte_transform";
$GLOBALS["TCA"]["tt_content"]["types"]["{$_PLUGIN_PREFIX}_panel"]["showitem"] = <<<SHOWITEM
--palette--;LLL:EXT:{$_EXTKEY}/Resources/Private/Language/TCA/{$_MODEL_NAME}.xlf:palette.head;{$_PLUGIN_PREFIX}_head,
header,subheader,btn,btn_link,bodytext
SHOWITEM;

