<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typeBien
 *
 * @ORM\Table(name="type_bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\typeBienRepository")
 */
class typeBien
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
     * @ORM\Column(name="libelle", type="string", length=180)
     */
    private $libelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="niveau", type="boolean")
     */
    private $niveau;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return typeBien
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set niveau
     *
     * @param boolean $niveau
     *
     * @return typeBien
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return bool
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}

