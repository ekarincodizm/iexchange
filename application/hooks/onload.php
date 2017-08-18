<?php

class Onload {

    private $ci;

    public function __Construct() {
        $this->ci = & get_instance();
        //echo 'Construct onload';
    }

    public function Check_login() {
        $controller = $this->ci->router->class;
        $method = $this->ci->router->method;

        if ($this->ci->session->userdata('id_user') == null) {

            if ($method != 'login' && $method != 'p_login') {
                redirect('login/login', 'refresh');
                exit();
            }
        } else {
            if ($method == 'login' || $method == 'p_login') {
                redirect('home', 'refresh');
                exit();
            }
        }
        //echo 'function Check login';
    }

}

?>
