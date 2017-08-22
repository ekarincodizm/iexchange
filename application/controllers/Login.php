<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index() {
        //echo 'aaaa';
        $this->load->view('index');
    }

    public function p_login() {
        $dt = $this->Login_model->get_user($this->input->post('username'), $this->input->post('password'));
        if ($dt) {
            $this->session->set_userdata('id_user', $dt->id_user);
           
            $this->session->set_userdata('fullname', $dt->fullname . ' (' . $dt->nickname . ')');
            $this->session->set_userdata('id_user_level', $dt->id_user_level);
            if ($dt->id_user_level != 1) {
                $this->session->set_userdata('id_station', $dt->id_station);
                $this->session->set_userdata('station_name', $dt->name);
            } else {
                $this->session->set_userdata('id_station', '00');
                $this->session->set_userdata('station_name', 'สำนักงานใหญ่');
            }
            redirect('home', 'refresh');
        }

        // print_r($dt);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('/login/', 'refresh');
    }

}
