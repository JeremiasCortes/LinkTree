<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Model {
    
    public function getAll(){
        return $this -> db -> get('enlaces')->result();
    }
} 
?>