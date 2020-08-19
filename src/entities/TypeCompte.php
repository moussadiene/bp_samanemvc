<?php
    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;


    /**
     * @Entity @Table(name="typecompte")
    **/
    class TypeCompte{
        /** 
         * @Id
         * @Column(type="integer") 
         * @GeneratedValue
         **/
        private $id;

        /**
         * @Column(type="string")
         **/
        private $libelle;

         /**
         * One typecompte has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="typecompte")
         */
        private $comptes;

        public function __construct(){
            $this->comptes = new ArrayCollection();

        }

        public function getID(){return $this->id;}
        public function getComptes(){return $this->comptes;}
        public function getLibelle(){return $this->libelle;}

        public function setID($id){ $this->id = $id;}
        public function setComptes($comptes){ $this->compte = $comptes;}
        public function setLibelle($libelle){ $this->libelle = $libelle;}

    }

?>