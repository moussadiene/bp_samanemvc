<?php
// namespace application\controller;

// use application\entities\Client;
// use application\model\M_Client;
// use application\model\M_Compte;
// use core\Controller;
use libs\system\Controller;
use src\model\ClientRepository;
use src\model\EntrepriseRepository;

class ClientController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $entreprisedao = new EntrepriseRepository();
            $clientdao = new ClientRepository();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            $this->view->load("client/client_iframe",$data);
        }

        public function getAll()
        {
            $entreprisedao = new EntrepriseRepository();
            $clientdao = new ClientRepository();
            $data['listeClient'] = $clientdao->liste();
            $data['listeEntreprise'] = $entreprisedao->getList();
            // var_dump($data['listEntreprise']);
            // die;
            
            $this->view->load("client/client_iframe",$data);
        }
        public function addClient() {

            
            extract($_POST);
            
            if(isset($cni)){

                $client = new Client();
                $client->setCni($cni);
                $client->setMatricule($this->codeAleatoire());
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setAdresse($adr);
                $client->setDateNaiss($datenaiss);
                $client->setSalaire($salaire);
                $client->setSexe($sexe);
                $client->setEmail($email);
                $client->setTelephone($tel);

                $entreprisedao = new EntrepriseRepository();
                $entreprise =  $entreprisedao->getEntreprise($entreprise_id_);
                $ok = $entreprisedao->deleteEntreprise($entreprise_id_);
                // echo $ok;
                // var_dump($entreprise );
                // die;

                $client->setEntreprise($entreprise);

                $clientdao = new ClientRepository();
                $data['notif']  = $clientdao->add($client);

                $data['listeClient'] = $clientdao->getList();
                $data['listeEntreprise'] = $entreprisedao->getList();
               
                echo json_encode($data);
            }
            echo "vous n'avez pas droit d'access";
           //$this->view->load("client/client_iframe",$data);
        }


        public function getDateNow(){
            $tz_object = new \DateTimeZone('UTC');
            $datetime = new \DateTime();
            $datetime->setTimezone($tz_object);
            return $datetime->format('Y\-m\-d');
        }
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
    }

?>
