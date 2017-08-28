<?php 

	private $ID_PUBLICATION;
	private $ID_USER;
	private $TXT_DESCRIPTION;
	private $TXT_TYPE;
	private $DT_CREATED;
	private $TXT_CONTENT;

	public function getID_PUBLICATION(){
		return $this->ID_PUBLICATION;
	}
	public function getID_USER(){
		return $this->ID_USER;
	}
	public function getTXT_DESCRIPTION(){
		return $this->TXT_DESCRIPTION;
	}
	public function getTXT_TYPE(){
		return $this->TXT_TYPE;
	}
	public function getDT_CREATED(){
		return $this->DT_CREATED;
	}
	public function getTXT_CONTENT(){
		return $this->TXT_CONTENT;
	}

	//setters
	public function setID_PUBLICATION($value){
		$this->ID_PUBLICATION = $value;
	}
	public function setID_USER($value){
		$this->ID_USER = $value;
	}
	public function setTXT_DESCRIPTION($value){
		$this->TXT_DESCRIPTION = $value;
	}
	public function setTXT_TYPE($value){
		$this->TXT_TYPE = $value;
	}
	public function setDT_CREATED($value){
		$this->DT_CREATED = $value;
	}
	public function setTXT_CONTENT($value){
		$this->TXT_CONTENT = $value;
	}

	public function selectAll(){
		$dao = new DAO();
		return $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS ORDER BY DT_CREATED;");
	}

	public function select($type){
		$dao = new DAO();
		return $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS WHERE TXT_TYPE = :TYPE", array(
			':TYPE'=>"%".$type."%"
		)); 
	}
 ?>