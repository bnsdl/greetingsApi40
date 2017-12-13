<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="messageType", columns={"messageType"})})
 * @ApiResource
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=256, nullable=false)
     */
    private $content;

    /**
     * @var \Messagetype
     *
     * @ORM\ManyToOne(targetEntity="Messagetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="messageType", referencedColumnName="id")
     * })
     */
    private $messagetype;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param string $content
	 */
	public function setContent( $content ) {
		$this->content = $content;
	}

	/**
	 * @return \Messagetype
	 */
	public function getMessagetype() {
		return $this->messagetype;
	}

	/**
	 * @param \Messagetype $messagetype
	 */
	public function setMessagetype( $messagetype ) {
		$this->messagetype = $messagetype;
	}

}

