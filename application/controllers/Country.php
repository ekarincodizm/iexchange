<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

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
    }

    public function get_country() {
        $data = array();
        $sql = "select id,concat(country_name,' (',cc_iso,')') name from country where lower(concat(country_name,' (',cc_iso,')')) like '%".strtolower($this->input->post('query'))."%' order by country_name";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        echo json_encode($data);
    }


}
