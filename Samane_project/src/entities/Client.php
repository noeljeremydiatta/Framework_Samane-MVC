<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="client")
 **/
class Client
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id_client;
    /** @Column(type="string") **/
    private $stacli;
    /** @Column(type="string") **/
    private $typecli;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
     private $email;
    /** @Column(type="string") **/
    private $telephone;
    /** @Column(type="string") **/
    private $nomem;
    /** @Column(type="string") **/
    private $raison;
    /** @Column(type="string") **/
    private $adem;
   
    /**
     * One client has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="id")
     */
    private $comptes;
    

    public function _construct()
    {
        $this->comptes = new ArrayCollection();
    }
    public function getComptes()
    {
        return $this->comptes;
    }
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }

    public function getId_client()
    {
        return $this->id_client;
    }
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }
    public function getStacli()
    {
        return $this->stacli;
    }
    public function setStacli($stacli)
    {
        $this->stacli = $stacli;
    }
    public function getTypecli()
    {
        return $this->typecli;
    }
    public function setTypecli($typecli)
    {
        $this->typecli = $typecli;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getNomem()
    {
        return $this->nomem;
    }
    public function setNomem($nomem)
    {
        $this->nomem = $nomem;
    }
    public function getRaison()
    {
        return $this->raison;
    }
    public function setRaison($raison)
    {
        $this->raison = $raison;
    }
    public function getAdem()
    {
        return $this->adem;
    }
    public function setAdem($adem)
    {
        $this->adem = $adem;
    }

}

?>