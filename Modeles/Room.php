<?php
require_once('MySQLiQuery.php');
class Room{
		protected $dbconn;

	function __construct() {
								
				$this->dbconn = MySQLiQuery::getObject('127.0.0.1','root','bobosa','phpdb');
        }

	public function insertRoom($data){
			
			if($this->dbconn){
          	    ////echo 'Connected//';
                $result=$this->dbconn->insert('Room' , array('number','description') , $data);
                             
                return $result;                               
            }else{
           	    //echo 'Failed//';
            }	
	
		}

 
	public function updateRoom($targetColumns,$newValues,$whereColumn,$whereValue){
			
			
			if($this->dbconn){
          	    //echo 'Connected//';
                $result=$this->dbconn->update('Room',$targetColumns,$newValues,$whereColumn,$whereValue);
                var_dump( $result);
                return $result;                                            
            }else{
           	    //echo 'Failed//';
            }	
	
		}

	public function deleteRoom($whereColumn,$whereValue){
			
			if($this->dbconn){
          	    //echo 'Connected//';
                $result=$this->dbconn->delete('Room',$whereColumn,$whereValue,'=');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}


		public function selectOneRoom($TargetColumn,$whereColumn,$whereValue){
			
			if($this->dbconn){
          	    //echo 'Connected select//';
                $result=$this->dbconn->select('ASSOCIATIVE','Room',$TargetColumn,False,$whereColumn,$whereValue,'=');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}


		public function selectRooms(){
			
			if($this->dbconn){
          	    //echo 'Connected select//';
                $result=$this->dbconn->select('ASSOCIATIVE','Room');
                
                return $result;                                           
            }else{
           	    //echo 'Failed//';
            }	
	
		}



}
?>