<?php

namespace Ephemit\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ephemit\EvenementBundle\Entity\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;
    
    /**
     * @var string
     *
     * @ORM\Column(name="publicpass", type="string", length=255, nullable=true)
     */
    private $publicpass;

    /**
     * @var string
     *
     * @ORM\Column(name="adminpass1", type="string", length=255)
     */
    private $adminpass1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="adminpass2", type="string", length=255)
     */
    private $adminpass2;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean")
     */
    private $public;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cle", type="string", length=255)
     */
    private $cle;
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;
    
    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;
    
    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="event", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $documents;

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
     * @return Evenement
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Evenement
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }
   

    /**
     * Set publicpass
     *
     * @param string $publicpass
     * @return Evenement
     */
    public function setPublicpass($publicpass)
    {
        $this->publicpass = $publicpass;

        return $this;
    }

    /**
     * Get publicpass
     *
     * @return string 
     */
    public function getPublicpass()
    {
        return $this->publicpass;
    }

    /**
     * Set adminpass1
     *
     * @param string $adminpass1
     * @return Evenement
     */
    public function setAdminpass1($adminpass1)
    {
        $this->adminpass1 = $adminpass1;

        return $this;
    }

    /**
     * Get adminpass1
     *
     * @return string 
     */
    public function getAdminpass1()
    {
        return $this->adminpass1;
    }

    /**
     * Set adminpass2
     *
     * @param string $adminpass2
     * @return Evenement
     */
    public function setAdminpass2($adminpass2)
    {
        $this->adminpass2 = $adminpass2;

        return $this;
    }

    /**
     * Get adminpass2
     *
     * @return string 
     */
    public function getAdminpass2()
    {
        return $this->adminpass2;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return Evenement
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set cle
     *
     * @param string $cle
     * @return Evenement
     */
    public function setCle($cle)
    {
        $this->cle = $cle;

        return $this;
    }

    /**
     * Get cle
     *
     * @return string 
     */
    public function getCle()
    {
        return $this->cle;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Evenement
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Evenement
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add documents
     *
     * @param \Ephemit\EvenementBundle\Entity\Document $documents
     * @return Evenement
     */
    public function addDocument(\Ephemit\EvenementBundle\Entity\Document $documents)
    {
        $this->documents[] = $documents;

        return $this;
    }

    /**
     * Remove documents
     *
     * @param \Ephemit\EvenementBundle\Entity\Document $documents
     */
    public function removeDocument(\Ephemit\EvenementBundle\Entity\Document $documents)
    {
        $this->documents->removeElement($documents);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
