<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/17/2017
 * Time: 10:43 AM
 */

class EventController extends CI_Controller {


    public function loadAdminEventView($status){

        if($this->session->userdata('user_type')=='Admin'){

            $status = 4;
            $id = ['status'=>$status];

//            $data = array('UserID' => $this->session->userdata('UserID'));
//
//            $this->load->model('UserModel');
//            $result = $this->UserModel->getUserDetails($data);
//
//            $rs = ['array' => $result];

//            $this->load->model('EventModel');
//            $query = $this->EventModel->getAdminEvent();
//            $data['EVENTS'] = null;

//            if($query){
//                $data['EVENTS'] =  $query;
//            }



            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar',$id);
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/events');


        } else {
            redirect("http://localhost/Tharanga_Man_Power/login");
        }

    }


}