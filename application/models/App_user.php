<?php

class App_user extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    

    public function getUser() {
        $this->db->select("*");
        $this->db->from('users');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $return['status'] = 'true';
            $return['resultSet'] = $query->result();
        } else {
            $return['status'] = 'false';
            $return['msg'] = 'Records not found';
        }
        return $return;
    }

}

?>