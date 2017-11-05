<?php 

class User{
	
	private $ID_USER;
	private $LOGIN;
	private $PSSWORD;
	private $DT_SUBMIT;

	//getters
	public function getID_USER(){
		return $this->ID_USER;
	}
	public function getLOGIN(){
		return $this->LOGIN;
	}
	public function getPSSWORD(){
		return $this->PSSWORD;
	}
	public function getDT_SUBMIT(){
		return $this->DT_SUBMIT;
	}

	//setters
	public function setID_USER($value){
		$this->ID_USER = $value;
	}
	public function setLOGIN($value){
		$this->LOGIN = $value;
	}
	public function setPSSWORD($value){
		$this->PSSWORD = $value;
	}
	public function setDT_SUBMIT($value){
		$this->DT_SUBMIT = $value;
	}

	//Db commands
	public function login($login, $password){
		$dao = new DAO();
		$result = $dao->select("SELECT * FROM TB_USERS WHERE LOGIN = :LOGIN AND PSSWORD = :PASSWORD", array(":LOGIN"=>$login,
		 		  ":PASSWORD"=>$password
			));

		if(count($result) > 0){
			$row = $result[0];
			$this->setID_USER($row['ID_USER']);
			$this->setLOGIN($row['LOGIN']);
			$this->setPSSWORD($row['PSSWORD']);
			$this->setDT_SUBMIT(new DateTime($row['DT_SUBMIT']));
		} else {
			throw new Exception("Login e/ou senha inválidos.");
		}
	}

	public function loadById($id){
		$dao = new DAO();
		$result = $dao->select("SELECT * FROM TB_USERS WHERE ID_USER = :ID", array(":ID"=>$id));
	
		if(count($result) > 0){
			$row = $result[0];

			$this->setID_USER($row['ID_USER']);
			$this->setLOGIN($row['LOGIN']);
			$this->setPSSWORD($row['PSSWORD']);
			$this->setDT_SUBMIT(new DateTime($row['DT_SUBMIT']));
		}
	}

	public function selectAll(){
		$dao = new DAO();
		return $dao->select("SELECT * FROM TB_USERS ORDER BY ID_USER;");
	}

	//Default db commands
	public function insert($user, $password){
		$dao = new DAO();
		$dao->query("INSERT INTO TB_USERS (LOGIN, PSSWORD) VALUES (:LOGIN, :PASSWORD)", 
			array(":LOGIN"=>$user,
				  ":PASSWORD"=>$password
	  	));
	}

	public function delete($login){
		$dao = new DAO();
		$dao->query("DELETE FROM TB_USERS WHERE LOGIN = :LOGIN", array(
			":LOGIN"=>$login
		));
		$this->setID_USER(0);
		$this->setLOGIN("");
		$this->setPSSWORD("");
		$this->setDT_SUBMIT(new DateTime());
	}

	public function update($login, $password){
		$this->setLOGIN($login);
		$this->setPSSWORD($password);
		$dao = new DAO();
		$dao->query("UPDATE TB_USERS SET LOGIN = :LOGIN, PSSWORD = :PASSWORD WHERE ID_USER = :ID", array(":LOGIN"=>$this->getLOGIN(),
				  ":PASSWORD"=>$this->getPSSWORD(), 
				  ":ID"=>$this->getID_USER()
			));
	}

	public function select($login){
		$dao = new DAO();
		return $dao->select("SELECT * FROM TB_USERS WHERE LOGIN = :SEARCH", array(
			':SEARCH'=>"%".$login."%"
		)); 
	}

	//object toString
	public function __toString(){
		return json_encode(array(
			"ID_USER"=>$this->getID_USER(),
			"LOGIN"=>$this->getLOGIN(),
			"PSSWORD"=>$this->getPSSWORD(),
			"DT_SUBMIT"=>$this->getDT_SUBMIT()->format("d/m/Y")
		));
	}
}

 ?>