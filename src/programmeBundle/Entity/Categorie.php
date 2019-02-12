<?php

namespace programmeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="programmeBundle\Repository\CategorieRepository")
 */
class Categorie
{

    /**
     * @ORM\ManyToOne(targetEntity="Sous_Categorie")
     *@ORM\JoinColumn(name="id_Sous_Categorie" , referencedColumnName="id" ,onDelete="CASCADE")
     */

    /**
     * @ORM\ManyToMany(targetEntity="Programme", mappedBy="Categorie")
     */
    private $Programme;

    /**
     * @return mixed
     */
    public function getProgramme()
    {
        return $this->Programme;
    }

    /**
     * @param mixed $Programme
     */
    public function setProgramme($Programme)
    {
        $this->Programme = $Programme;
    }

    private $Sous_categorie;

    /**
     * @return mixed
     */
    public function getSousCategorie()
    {
        return $this->Sous_categorie;
    }

    /**
     * @param mixed $Sous_categorie
     */
    public function setSousCategorie($Sous_categorie)
    {
        $this->Sous_categorie = $Sous_categorie;
    }




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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * @return Categorie
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
     * Set description
     *
     * @param string $description
     *
     * @return Categorie
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
}

