<?php
// namespace application\controller;

// use application\entities\Client;
// use application\model\M_Client;
// use application\model\M_Compte;
// use core\Controller;
use libs\system\Controller;
use src\model\ClientRepository;
use src\model\CompteRepository;
use src\model\EntrepriseRepository;
use src\model\TypeCompteRepository;

class CompteController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $entreprisedao = new EntrepriseRepository();
            $clientdao = new ClientRepository();
            $comptedao = new CompteRepository();
            $typecomptedao = new TypeCompteRepository();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $data['listeCompte'] = $comptedao->getList();
            $data['listeTypeCompte'] = $typecomptedao->getList();
            $this->view->load("compte/compte_iframe",$data);
        }

        public function lister()
        {
            $entreprisedao = new EntrepriseRepository();
            $clientdao = new ClientRepository();
            $comptedao = new CompteRepository();
            $typecomptedao = new TypeCompteRepository();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $data['listeCompte'] = $comptedao->getList();
            $data['listeTypeCompte'] = $typecomptedao->getList();
            return $data;
        }
        public function getAll()
        {
           
            $entreprisedao = new EntrepriseRepository();
            $clientdao = new ClientRepository();
            $comptedao = new CompteRepository();
            $typecomptedao = new TypeCompteRepository();
            $data['listeClient'] = $clientdao->getList();
           
            $data['listeEntreprise'] = $entreprisedao->getList();
           
            $data['listeCompte'] = $comptedao->liste();
            
            $data['listeTypeCompte'] = $typecomptedao->getList();
            
            $this->view->load("compte/compte_iframe",$data);
        }

        public function addCompte() {

            extract($_POST);

            if(isset($choix_type_compte)){

                // $clientdao = new ClientRepository();
                // $entreprisedao = new EntrepriseRepository();
                // $typecomptedao = new TypeCompteRepository();

                // if($choixclient == "physique"){
                //     $client = new Client();
                //     $client = $clientdao->getClientsByMatricule($matricule);
                //     $clientdao->getClientsByMatricule($matricule);

                //     $compte->setClient($client);
                // }else{
                //     $entreprise = new Entreprise();
                //     $entreprise = $entreprisedao->getEntrepriseById($entreprise_id);
                //     $compte->setEntreprise($entreprise);
                // }
                $comptedao = new CompteRepository();
                $compte = new Compte();

                $client = new Client();
                $client = $comptedao->getClientsByMatricule($matricule);

                $compte->setClient($client);

                $typecompte = new TypeCompte();
                $typecompte = $comptedao->getCompteByLibelle($choix_type_compte);
                $compte->setTypeCompte($typecompte);

                $compte->setNumero($this->codeAleatoire());
                $compte->setRib($this->cleRip());
                $compte->setSolde(10000);
                $compte->setDateOuverture($this->getDateNow());

                if($choix_type_compte == "courant"){
                    $compte->setAgios(10000);
                }
                if($choix_type_compte == "simple"){
                    $compte->setFraisOuverture(20000);
                    $compte->setRemuneration(10000);
                }
                if($choix_type_compte == "bloque"){
                    $compte->setFraisOuverture(20000);
                    $compte->setRemuneration(10000);
                    $compte->setDateDebut($date_debut);
                    $compte->setDateFin($date_fin);
                }
               
                $data = $this->lister();
                
                $data['notif'] = $comptedao->add($compte);
                echo json_encode($data);
            }

        echo "vous n'avez pas le droit";

        }
        // public function addEntreprise() {

        //     extract($_POST);
        //     exit();
        //     $clientdao = new M_Client();
        //     $list = $clientdao->getList();

        //    $this->view->load("client/V_add",$data['res'] );

        // }

        // public function getDateNow(){
        //     $tz_object = new \DateTimeZone('UTC');
        //     $datetime = new \DateTime();
        //     $datetime->setTimezone($tz_object);
        //     return $datetime->format('Y\-m\-d');
        // }

        private function codeAleatoire()
        {
            $string = "";
            $chaine = "2643789ABDCEFGHJKMNPRTUVW";
            srand((double)microtime()*1000000);
            for($i=0; $i<8; $i++)
            {
                $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
        }

        private function cleRip()
        {
            $string = "";
            $chaine = "012643789";
            srand((double)microtime()*1000000);
            do{
                for($i=0; $i<2; $i++)
                {
                    $string .= $chaine[rand()%strlen($chaine)];
                }
            }while($string=="99" || $string=="98");

            return intval($string);
        }

        private function getDateNow(){
            $tz_object = new \DateTimeZone('UTC');
            $datetime = new \DateTime();
            $datetime->setTimezone($tz_object);
            return $datetime->format('Y\-m\-d');
        }
    }

?>
