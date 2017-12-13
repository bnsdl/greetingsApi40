<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Messagetype
 *
 * @ORM\Table(name="messageType")
 * @ORM\Entity
 */
class Messagetype
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
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;


}

