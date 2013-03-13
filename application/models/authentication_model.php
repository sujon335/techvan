<?php

class Authentication_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    function validate_admin()
    {
        $this->db->where('username',$this->input->post('name',true));
        $this->db->where('password',  md5($this->input->post('password')));
        $query=$this->db->get('admin_login');

        if($query->num_rows==1)
        {

            return true;
        }
    }

    function validate_employee()
    {
        $this->db->where('employee_name',$this->input->post('name',true));
        $this->db->where('password',  md5($this->input->post('password')));
        $query=$this->db->get('employee');

        if($query->num_rows==1)
        {

            return true;
        }
    }


    

}

?>
