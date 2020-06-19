<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('Detail_view');
    }
}
