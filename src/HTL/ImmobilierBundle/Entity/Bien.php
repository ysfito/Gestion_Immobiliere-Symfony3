<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
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
     * @ORM\Column(name="nomBien", type="string", length=60)
     */
    private $nomBien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    private $prixLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="idParentBien", type="integer", nullable=true)
     */
    private $idParentBien;

    /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Localite")

   * @ORM\JoinColumn(nullable=false)

   */

  private $localite;


   /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\typeBien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $typeBien;

    /**
     * @ORM\OneToMany(targetEntity="HTL\ImmobilierBundle\Entity\Image", mappedBy="bien")
     * @ORM\JoinColumn(nullable=true)
     */

private $images;



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
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }



    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
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
     * Set prixLocation
     *
     * @param integer $prixLocation
     *
     * @return Bien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation
     *
     * @return int
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * Set idParentBien
     *
     * @param integer $idParentBien
     *
     * @return Bien
     */
    public function setIdParentBien($idParentBien)
    {
        $this->idParentBien = $idParentBien;

        return $this;
    }

    /**
     * Get idParentBien
     *
     * @return int
     */
    public function getIdParentBien()
    {
        return $this->idParentBien;
    }


    /**
     * Set localite
     *
     * @param \HTL\ImmobilierBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\HTL\ImmobilierBundle\Entity\Localite $localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \HTL\ImmobilierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set typeBien
     *
     * @param \HTL\ImmobilierBundle\Entity\typeBien $typeBien
     *
     * @return Bien
     */
    public function setTypeBien(\HTL\ImmobilierBundle\Entity\typeBien $typeBien)
    {
        $this->typeBien = $typeBien;

        return $this;
    }

    /**
     * Get typeBien
     *
     * @return \HTL\ImmobilierBundle\Entity\typeBien
     */

    public function getTypeBien()
    {
        return $this->typeBien;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \HTL\ImmobilierBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\HTL\ImmobilierBundle\Entity\Image $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \HTL\ImmobilierBundle\Entity\Image $image
     */
    public function removeImage(\HTL\ImmobilierBundle\Entity\Image $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->images;
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }


    public function __toString()
     {
    return 'any string';
     }
     
}
