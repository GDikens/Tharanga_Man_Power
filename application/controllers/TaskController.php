<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/17/2017
 * Time: 11:34 AM
 */

class TaskController extends CI_Controller{

    public function loadAdminTaskView($status){

        if($this->session->userdata('user_type')=='Admin'){

            $status = 5;
            $id = ['status'=>$status];

//            $data = array('UserID' => $this->session->userdata('UserID'));
//
//            $this->load->model('UserModel');
//            $result = $this->UserModel->getUserDetails($data);
//
//            $rs = ['array' => $result];

//            $this->load->model('TaskModel');
//            $query = $this->TaskModel->getTask();
//            $data['TASKS'] = null;
//
//            if($query){
//                $data['TASKS'] =  $query;
//            }



            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar',$id);
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/tasks');


        } else {
            redirect("http://localhost/Tharanga_Man_Power/login");
        }

    }

}