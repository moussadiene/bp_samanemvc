<?php

    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
     /**
     * @Entity @Table(name="client")
     **/
    class Client{
       /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /**
         * @Column(type="string",unique=true)
         */
        private $matricule;
         /**
         * @Column(type="string",unique=true)
         */
        private $cni;
        /**
         * @Column(type="string") 
         **/
        private $nom;
        /**
         * @Column(type="string")
         **/
        private $prenom;
        /**
         * @Column(type="string") 
         **/
        private $sexe;
        /**
         * @Column(type="string")
         **/
        private $dateNaiss;
        /**
         * @Column(type="string") 
         **/
        private $telephone;
        /**
         * @Column(type="string")
         **/
        private $adresse;
        /**
         * @Column(type="string")
        **/
        private $email;
        /**
         * @Column(type="string",nullable=true)
         **/
        private $salaire;
        /**
         * @Column(type="string",nullable=true)
         **/
        private $login;
        /**
         * @Column(type="string",nullable=true)
         **/
        private $password;
        /**
         * One client has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="client")
         */
        private $comptes;

         /**
         * Many compte have one client. This is the owning side.
         * @ManyToOne(targetEntity="Entreprise", inversedBy="clients",cascade={"persist"})
         * @JoinColumn(name="entreprise_id", referencedColumnName="id")
         */
        private $entreprise; //clé etrangere du client

        public function __construct(){
            $this->comptes = new ArrayCollection();
        }

        //Getters
        public function getID(){return $this->id;}
        public function getCni(){return $this->cni;}
        public function getMatricule(){return $this->matricule;}
        public function getPrenom(){return $this->prenom;}
        public function getNom(){return $this->nom;}
        public function getSexe(){return $this->sexe;}
        public function getDateNaiss(){return $this->dateNaiss;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getSalaire(){return $this->salaire;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}

        public function getCompte(){return $this->comptes;}
        public function getEntreprise(){return $this->entreprise;}

        //Setters

        public function setID($id){$this->id = $id; }
        public function setCni($cni){ $this->cni = $cni;}
        public function setMatricule($mat){ $this->matricule = $mat;}
        public function setNom($nom){ $this->nom = $nom;}
        public function setPrenom($prenom){ $this->prenom = $prenom;}
        public function setSexe($sexe){ $this->sexe = $sexe;}
        public function setDateNaiss($dateNaiss){ $this->dateNaiss = $dateNaiss;}
        public function setTelephone($telephone){ $this->telephone = $telephone;}
        public function setAdresse($adresse){ $this->adresse = $adresse;}
        public function setEmail($email = null){ $this->email = $email;}
        public function setSalaire($salaire = null){ $this->salaire = $salaire;}
        public function setLogin($login = null){ $this->login = $login;}
        public function setPassword($password = null){ $this->password = $password;}

        public function setEntreprise($entreprise = null){ $this->entreprise = $entreprise;}
        public function setCompte($comptes){ $this->comptes = $comptes;}


    }
?>