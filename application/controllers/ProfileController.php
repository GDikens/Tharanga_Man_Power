<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/16/2017
 * Time: 3:54 PM
 */

class ProfileController extends CI_Controller{

    public function index(){


    }

    public function loadAdminProfile($status){

        if($this->session->userdata('user_type')=='Admin'){

            $status = 2;
            $id = ['status'=>$status];

//            $data = array('UserID' => $this->session->userdata('UserID'));
//
//            $this->load->model('UserModel');
//            $result = $this->UserModel->getUserDetails($data);
//
//            $rs = ['array' => $result];

            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar',$id);
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/profile');

        } else {
            redirect("http://localhost/Tharanga_Man_Power/login");
        }

    }

    public function addEmployee(){

        if($this->session->userdata('user_type')=='Admin'){

            $status = 2;
            $id = ['status'=>$status];

            $count = $this->input->post('count');

            for($i=0;$i<$count;$i++){
                echo $i;
            }


            $data=array(


                'EmployeeName'=>$this->input->post('first_name'),
                'NIC'=>$this->input->post('last_name'),
                'Address'=>$this->input->post('address_line_1'),
                'Gender'=>$this->input->post('contact_no'),
                'DateEnrolled'=>$this->input->post('faculty'),
                'TeleNo'=>$this->input->post('position')
            );

            if($data){
                echo "good";
            }


            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar',$id);
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/profile');

        } else {
            redirect("http://localhost/Tharanga_Man_Power/login");
        }



    }


}