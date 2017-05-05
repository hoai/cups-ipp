<?php

namespace Smalot\Cups\Model;

/**
 * Class Printer
 *
 * @package Smalot\Cups\Model
 */
class Printer implements PrinterInterface
{

    use Traits\AttributeAware;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return Printer
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Printer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Printer
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
