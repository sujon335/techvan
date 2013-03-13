<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');

    }

        public function login() {

                   $this->load->library('form_validation');
                   $this->form_validation->set_rules('name','','trim|required');
                   $this->form_validation->set_rules('password','','trim|required');
                           if ($this->form_validation->run() == FALSE) {

                                $this->load->view('admin_login_view');
                           }

                           else
                           {
                                   $query=$this->authentication_model->validate_admin();
                                   if($query)
                                   {
                                       $data = array(
                                           'email' =>$this->input->post('name',true),
                                           'is_logged_in_admin' =>true
                                       );

                                     $this->load->library('session');
                                     $this->session->set_userdata($data);

                                     $this->load->view('admin_page');
                                   }

                                   else $this->load->view('admin_login_view');

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