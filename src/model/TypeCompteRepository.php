<?php
namespace src\model; 

use libs\system\Model; 

	class TypeCompteRepository extends Model{

        public function __construct(){
			parent::__construct();
		}
		function add($typecompte){
			if($this->db != null)
			{
				$this->db->persist($typecompte);
				$this->db->flush();

				return $typecompte->getId();
			}
		}

		public function getList()
		{
			if($this->db != null)
			{
				return $this->db->getRepository('TypeCompte')->findAll();
			}
		}

		public function getTypeCompteById($id)
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM TypeCompte c WHERE c.id = " . $id)->getSingleResult();
			}
		}
		public function getCompteByLibelle($lib)
		{
			if($this->db != null)
			{
				return $this->db->getRepository('TypeCompte')->findBy(array('libelle' => $lib));
			}
		}
		public function liste()
		{
			if($this->db != null)
			{
				return $this->db->createQuery("SELECT c FROM TypeCompte c")->getResult();
			}
		}

		public function deleteTypeCompte($id){
			if($this->db != null)
			{
				$typecompte = $this->db->find('TypeCompte', $id);
				if($ense != null)
				{
					$this->db->remove($typecompte);
					$this->db->flush();
				}else {
					die("Objet ".$id." does not existe!");
				}
			}
		}

	}
