<?php
namespace Vendor\Test\DataProcessing;

use Vendor\Test\Domain\Model\ContentElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Frontend\ContentObject\Exception\ContentRenderingException;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class DefaultDataProcessor implements DataProcessorInterface
{

    /**
     * Default data processor for content elements
     *
     * @param ContentObjectRenderer $cObj The content object renderer, which contains data of the content element
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     * @throws ContentRenderingException
     */
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {

        // Parse and map the content onto an object
        /* @var $contentElement ContentElement */
        $contentElement = $this->getDataMapper()->map(
            ContentElement::class,
            array(
                $cObj->data
            )
        )[0];

        // Add default data (current PID and content element)
        $processedData['contentElement'] = $contentElement;

        return $processedData;
    }

    /**
     * @return ObjectManager
     */
    protected function getObjectManager()
    {

        return GeneralUtility::makeInstance(ObjectManager::class);
    }

    /**
     * @return DataMapper
     */
    protected function getDataMapper()
    {

        return $this->getObjectManager()->get(DataMapper::class);
    }

}