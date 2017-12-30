<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/16/2017
 * Time: 1:23 PM
 */

class TestController extends CI_Controller{

    public function index(){

        $this->load->view('template/head');
        $this->load->view('template/style');
        $this->load->view('template/navbar');
        $this->load->view('template/topbar');
        $this->load->view('template/core_view');

    }

}