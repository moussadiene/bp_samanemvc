<?php
    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

   /**
     * @Entity @Table(name="entreprise")
     **/
    class Entreprise{
        /**
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
         **/
        private $id;

        /**
         * @Column(type="string",unique=true) 
         **/
        private $nomEntreprise;
        /**
         * @Column(type="string") 
         **/
        private $adresse ;
        /**
         * @Column(type="string") 
         **/
        private $telephone;
        /**
         * @Column(type="string") 
         **/
        private $email;
        /**
         * @Column(type="string",nullable=true)
         **/
        private $login;
        /**
         * @Column(type="string",nullable=true) 
         **/
        private $password;
        /**
         * @Column(type="decimal") 
         **/
        private $budget;

        /**
         * One entreprise has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="entreprise")
         */
        private $comptes;

        /**
         * One client has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Client", mappedBy="entreprise")
         */
        private $clients;

        public function __construct(){ 
            $this->comptes = new ArrayCollection();
            $this->clients = new ArrayCollection();
        }
        //Getters
        public function getId(){return $this->id;}
        public function getNomEntreprise(){return $this->nomEntreprise;}
        public function getTelephone(){return $this->telephone;}
        public function getAdresse(){return $this->adresse;}
        public function getEmail(){return $this->email;}
        public function getLogin(){return $this->login;}
        public function getPassword(){return $this->password;}
        public function getBudget(){return $this->budget;}

        public function getComptes(){return $this->comptes;}
        public function getClient(){return $this->clients;}

       //Setters
       public function setNomEntreprise($nomEntreprise){ $this->nomEntreprise = $nomEntreprise;}
       public function setTelephone($telephone){ $this->telephone = $telephone;}
       public function setAdresse($adresse){ $this->adresse = $adresse;}
       public function setEmail($email){ $this->email = $email;}
       public function setLogin($login = null){ $this->login = $login;}
       public function setPassword($password = null){ $this->password = $password;}
       public function setBudjet($budget){ $this->budget = $budget;}

       public function setComptes($comptes){ $this->comptes = $comptes;}
       public function setClient($clients){ $this->clients = $clients;}
    }

?>