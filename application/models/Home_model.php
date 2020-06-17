<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('Home_view');
    }
}
