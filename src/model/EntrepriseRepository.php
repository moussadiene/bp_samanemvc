<?php
namespace src\model; 

use libs\system\Model; 

class EntrepriseRepository extends Model{

        public function __construct(){
			parent::__construct();
		}
		function add($entreprise){
			if($this->db != null)
			{
				$this->db->persist($entreprise);
				$this->db->flush();

				return $entreprise->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Entreprise')->findAll();
			}
		}

		public function getEntreprise($id)
		{
			if($this->db != null)
			{
				return $this->db->getRepository('Entreprise')->find($id);
			}
		}

		public function getEntrepriseById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT e FROM Entreprise e WHERE e.id = " . $id)->getSingleResult();
			}
		}
		public function liste()
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT e FROM Entreprise e")->getResult();
			}
		}

		public function deleteEntreprise($id){
			if($this->db != null)
			{
				$ense = $this->db->find('Entreprise', $id);
				if($ense != null)
				{
					$this->db->remove($ense);
					$this->db->flush();
				}else {
					die("Objet ".$id." does not existe!");
				}
			}
		}
	}
