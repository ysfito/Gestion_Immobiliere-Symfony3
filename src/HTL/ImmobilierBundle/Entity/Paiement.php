<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\PaiementRepository")
 */
class Paiement
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
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="date")
     */
    private $datePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode", type="date")
     */
    private $periode;

    /**

    * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Contrat")

    * @ORM\JoinColumn(nullable=false)

    */

    private $contrat;


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
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     *
     * @return Paiement
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Paiement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set periode
     *
     * @param \DateTime $periode
     *
     * @return Paiement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \DateTime
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
