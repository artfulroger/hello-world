<?php
  class uselog extends db {

    public function __construct(
	  $id						= null, 
	  $action				= "",
	  $date_time		= "",
	  $last_name		= "",
	  $first_name		= "",
	  $mem_id				= "",
		$useragent		= "",
		$ipaddress		= ""
    ){
      parent::__construct();
      $this->table_name = "uselog";
      if($id == null){
		$this->vars["date_time"] 	 = $date_time; 
		$this->vars["action"]			 = $action; 
		$this->vars["last_name"]	 = $last_name; 
		$this->vars["first_name"]	 = $first_name;	
		$this->vars["mem_id"]			 = $mem_id;  
		$this->vars["useragent"]	 = $useragent;
		$this->vars["ipaddress"]	 = $ipaddress;  		
      }else{
        //$this->vars["id"]=$id;
        $this->load($id, "id");
      }
    }
  }
?>
