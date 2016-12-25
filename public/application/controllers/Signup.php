<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('user_model');
        $this->load->database();
    }
}