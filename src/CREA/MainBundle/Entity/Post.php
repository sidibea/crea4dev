<?php

namespace CREA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="CREA\MainBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_entreprise", type="string", length=255, nullable=true)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_enregistrement_entreprise", type="string", length=255, nullable=true)
     */
    private $numeroEnregistrementEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="description_entreprise", type="text", nullable=true)
     */
    private $descriptionEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="text",  nullable=false)
     */
    private $descriptionProduit;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_coder", type="boolean")
     */
    private $isCoder;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_prototype", type="boolean")
     */
    private $isPrototype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Post
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Post
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Post
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     *
     * @return Post
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set numeroEnregistrementEntreprise
     *
     * @param string $numeroEnregistrementEntreprise
     *
     * @return Post
     */
    public function setNumeroEnregistrementEntreprise($numeroEnregistrementEntreprise)
    {
        $this->numeroEnregistrementEntreprise = $numeroEnregistrementEntreprise;

        return $this;
    }

    /**
     * Get numeroEnregistrementEntreprise
     *
     * @return string
     */
    public function getNumeroEnregistrementEntreprise()
    {
        return $this->numeroEnregistrementEntreprise;
    }

    /**
     * Set isCoder
     *
     * @param boolean $isCoder
     *
     * @return Post
     */
    public function setIsCoder($isCoder)
    {
        $this->isCoder = $isCoder;

        return $this;
    }

    /**
     * Get isCoder
     *
     * @return bool
     */
    public function getIsCoder()
    {
        return $this->isCoder;
    }

    /**
     * Set isPrototype
     *
     * @param boolean $isPrototype
     *
     * @return Post
     */
    public function setIsPrototype($isPrototype)
    {
        $this->isPrototype = $isPrototype;

        return $this;
    }

    /**
     * Get isPrototype
     *
     * @return bool
     */
    public function getIsPrototype()
    {
        return $this->isPrototype;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Post
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Post
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * @param string $descriptionEntreprise
     */
    public function setDescriptionEntreprise($descriptionEntreprise)
    {
        $this->descriptionEntreprise = $descriptionEntreprise;
    }

    /**
     * @return string
     */
    public function getDescriptionEntreprise()
    {
        return $this->descriptionEntreprise;
    }

    /**
     * @param string $descriptionProduit
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;
    }

    /**
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }




}

