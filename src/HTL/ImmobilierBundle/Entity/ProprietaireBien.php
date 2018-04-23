<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProprietaireBien
 *
 * @ORM\Table(name="proprietaire_bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ProprietaireBienRepository")
 */
class ProprietaireBien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseBien", type="string", length=150)
     */
    private $adresseBien;

    /**
     * @var int
     *
     * @ORM\Column(name="prixProprietaire", type="integer")
     */
    private $prixProprietaire;

       /**

       * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Proprietaire")

       * @ORM\JoinColumn(nullable=false)

       */

      private $proprietaire;

      /**

      * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")

      * @ORM\JoinColumn(nullable=false)

      */

     private $bien;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresseBien
     *
     * @param string $adresseBien
     *
     * @return ProprietaireBien
     */
    public function setAdresseBien($adresseBien)
    {
        $this->adresseBien = $adresseBien;

        return $this;
    }

    /**
     * Get adresseBien
     *
     * @return string
     */
    public function getAdresseBien()
    {
        return $this->adresseBien;
    }

    /**
     * Set prixProprietaire
     *
     * @param integer $prixProprietaire
     *
     * @return ProprietaireBien
     */
    public function setPrixProprietaire($prixProprietaire)
    {
        $this->prixProprietaire = $prixProprietaire;

        return $this;
    }

    /**
     * Get prixProprietaire
     *
     * @return int
     */
    public function getPrixProprietaire()
    {
        return $this->prixProprietaire;
    }
}
