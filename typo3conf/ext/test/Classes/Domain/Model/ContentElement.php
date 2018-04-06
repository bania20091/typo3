<?php
namespace Vendor\Test\Domain\Model;

/**
 * Domain model for content elements
 *
 * @package Vendor\Test\Domain\Model
 */
class ContentElement extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * The header
     *
     * @var string
     */
    protected $header;

    /**
     * The body
     *
     * @var string
     */
    protected $body;


    /**
     * Gets the header
     *
     * @return string
     */
    public function getHeader()
    {

        return $this->header;
    }

    /**
     * Sets the header
     *
     * @param string $header
     * @return void
     */
    public function setHeader($header)
    {

        $this->header = $header;
    }

    /**
     * Gets the body
     *
     * @return string
     */
    public function getBody()
    {

        return $this->body;
    }

    /**
     * Sets the body
     *
     * @param string $body
     * @return void
     */
    public function setBody($body)
    {

        $this->body = $body;
    }
}