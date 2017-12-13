<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="messageType", columns={"messageType"})})
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


}

