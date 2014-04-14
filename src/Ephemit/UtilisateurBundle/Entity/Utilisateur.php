<?php

namespace Ephemit\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ephemit\UtilisateurBundle\Entity\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Ephemit\EvenementBundle\Entity\Evenement")
     * @ORM\JoinTable(name="utilisateur_favoris")
     */
    private $favoris;


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
     * Constructor
     */
    public function __construct()
    {
        $this->favoris = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Add favoris
     *
     * @param \Ephemit\EvenementBundle\Entity\Evenement $favoris
     * @return Utilisateur
     */
    public function addFavori(\Ephemit\EvenementBundle\Entity\Evenement $favoris)
    {
        $this->favoris[] = $favoris;

        return $this;
    }

    /**
     * Remove favoris
     *
     * @param \Ephemit\EvenementBundle\Entity\Evenement $favoris
     */
    public function removeFavori(\Ephemit\EvenementBundle\Entity\Evenement $favoris)
    {
        $this->favoris->removeElement($favoris);
    }

    /**
     * Get favoris
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavoris()
    {
        return $this->favoris;
    }
}
