<?php
namespace src\model; 

 use libs\system\Model; 

//require_once './application/entities/Client.php';
class ClientRepository extends Model{

        public function __construct(){
			parent::__construct();
		}


		function searchClientbyCNI(){

		}



		public function add($client){
			if($this->db != null)
			{
				$this->db->persist($client);
				$this->db->flush();
	
				return $client->getId();
			}
		}

		public function getList(){
			if($this->db != null)
			{
				return $this->db->getRepository('Client')->findAll();
			}else{
				return 10;
			}
		}
		public function getClientById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Client c WHERE c.id = " . $id)->getSingleResult();
			}
		}

		public function liste()
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM Client c")->getResult();
			}
		}

		

		public function deleteClient($id){
			if($this->db != null)
			{
				$client = $this->db->find('Client', $id);
				if($client != null)
				{
					$this->db->remove($client);
					$this->db->flush();
				}else {
					die("Objet ".$id." does not existe!");
				}
			}
		}

	}
