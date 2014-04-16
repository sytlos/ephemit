<?php

namespace Ephemit\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ephemit\EvenementBundle\Entity\DocumentRepository")
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomOriginal", type="string", length=255, nullable=true)
     */
    private $nomOriginal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    private $date;
    
    /**
     * @Assert\File(maxSize=10485760)
     */
    public $file;
    
    /**
     * @ORM\ManyToOne(targetEntity="Evenement", inversedBy="documents")
     * @ORM\JoinColumn(referencedColumnName="id", nullable=true)
     */
    private $event;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Document
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set event
     *
     * @param \Ephemit\EvenementBundle\Entity\Evenement $event
     * @return Document
     */
    public function setEvent(\Ephemit\EvenementBundle\Entity\Evenement $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Ephemit\EvenementBundle\Entity\Evenement 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set nomOriginal
     *
     * @param string $nomOriginal
     * @return Document
     */
    public function setNomOriginal($nomOriginal)
    {
        $this->nomOriginal = $nomOriginal;

        return $this;
    }

    /**
     * Get nomOriginal
     *
     * @return string 
     */
    public function getNomOriginal()
    {
        return $this->nomOriginal;
    }
}
