<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Employee_auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');

    }

        public function login() {

                   $this->load->library('form_validation');
                   $this->form_validation->set_rules('name','','trim|required');
                   $this->form_validation->set_rules('password','','trim|required');
                           if ($this->form_validation->run() == FALSE) {

                                $this->load->view('employee_login_view');
                           }

                           else
                           {
                                   $query=$this->authentication_model->validate_employee();
                                   if($query)
                                   {
                                       $data = array(
                                           'email' =>$this->input->post('name',true),
                                           'is_logged_in_employee' =>true
                                       );

                                     $this->load->library('session');
                                     $this->session->set_userdata($data);

                                     $this->load->view('employee_page');
                                   }

                                   else  $this->load->view('employee_login_view');

                           }



        }

        function logout()
        {
                    $this->load->library('session');
                    $this->session->sess_destroy();
                    redirect('');
        }



}


?>