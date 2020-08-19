<?php

    use Doctrine\ORM\Annotation as ORM;

      /**
     * @Entity @Table(name="compte")
     **/
    class Compte{
        /**
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
         **/
        private $id;
        /**
         * @Column(type="string",unique=true) 
         **/
        private $numero;
        /**
         * @Column(type="string") 
         **/
        private $dateOuverture;
        /**
         * @Column(type="string") 
         **/
        private $rib;
        /**
         * @Column(type="decimal") 
        **/
        private $solde;

         /**
         * Many compte have one client. This is the owning side.
         * @ManyToOne(targetEntity="Client", inversedBy="comptes")
         * @JoinColumn(name="client_id", referencedColumnName="id")
         */
        private $client; //clé etrangere du client

         /**
         * Many compte have one typecompte. This is the owning side.
         * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
         * @JoinColumn(name="typecompte_id", referencedColumnName="id")
         */
        private $typeCompte;

         /**
         * Many compte have one entreprise. This is the owning side.
         * @ManyToOne(targetEntity="Entreprise", inversedBy="comptes")
         * @JoinColumn(name="entreprise_id", referencedColumnName="id")
         */
        private $entreprise;

        /**
         * @Column(type="decimal",nullable=true)
         **/
        private $agios;
        /**
         * @Column(type="decimal",nullable=true)
         **/
        private $remuneration;
        /**
         * @Column(type="decimal",nullable=true)
         **/
        private $fraisOuverture ;
        /**
         * @Column(type="datetime",nullable=true)
         **/
        private $dateDebut;
        /**
         * @Column(type="datetime",nullable=true)
         **/
        private $dateFin;

        public function __construct(){ }

        public function getID(){return $this->id;}
        public function getDateOuverture(){return $this->dateOuverture;}
        public function getNumero(){return $this->numero;}
        public function getRib(){return $this->rib;}
        public function getSolde(){return $this->solde;}

        public function getClient(){return $this->client;}
        public function getEntreprise(){return $this->entreprise;}
        public function getTypeCompte(){return $this->typeCompte;}
        //epargne
        public function getRemuneration(){return $this->remuneration;}
        public function getFraisOuverture(){return $this->fraisOuverture;}

        public function setRemuneration($remuneration){ $this->remuneration= $remuneration;}
        public function setFraisOuverture($fraisOuverture){ $this->fraisOuverture = $fraisOuverture;}
        //corant
        public function getAgios(){return $this->agios;}
        public function setAgios($agios){ $this->agios = $agios;}
        //bloqué
        public function getDateDebut(){return $this->dateDebut;}
        public function getDateFin(){return $this->dateFin;}

        public function setDateDebut($dateDebut = null){ $this->dateDebut = $dateDebut;}
        public function setDateFin($dateFin = null){ $this->dateFin = $dateFin;}

        public function setID($id){ $this->id = $id;}
        public function setDateOuverture($dateOuverture = null){ $this->dateOuverture = $dateOuverture;}
        public function setNumero($numero){ $this->numero = $numero;}
        public function setRib($rib){ $this->rib = $rib;}
        public function setSolde($solde = null){ $this->solde = $solde;}

        public function setClient($client){ $this->client= $client;}
        public function setEntreprise($entreprise){ $this->entreprise = $entreprise;}
        public function setTypeCompte($typeCompte){ $this->typeCompte = $typeCompte;}

    }

?>