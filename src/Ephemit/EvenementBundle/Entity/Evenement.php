<?php

namespace Ephemit\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
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
     * Set date
     *
     * @param \DateTime $date
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
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
}
