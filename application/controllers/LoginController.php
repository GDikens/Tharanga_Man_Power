<?php

class LoginController extends CI_Controller{

    public function index() {

        $status = 0;

        $id = ['status' => $status];

        $this->load->view('template/head');
        $this->load->view('template/style');
        $this->load->view('template/topbar');
        $this->load->view('navbar',$id);
		$this->load->view('loginpage');

	}

	public function authenticate(){


        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array('username' => $username,'password' => $password);


        $this->load->model("UserModel");
        $result = $this->UserModel->checkUser($data);

        if($result){


            foreach ($result as $val){

                $position = $val->Position;
                $UserID = $val->UserID;
                $profile_image = $val->profile_image;
                $FirstName = $val->FirstName;
                $ContactNo = $val->ContactNo;


                $session_data = array('username' => $username,'password' => $password,'user_type' => $position,'UserID' => $UserID,'profile_image' => $profile_image,'FirstName' => $FirstName,'ContactNo' => $ContactNo);
                $this->session->set_userdata($session_data);

                if($this->session->userdata('user_type')=='Admin'){
                    redirect("http://localhost/Tharanga_Man_Power/admin");
                } else {
                    $this->session->sess_destroy();
                    redirect("http://localhost/Tharanga_Man_Power/login");
                }

            }

        } else {

            $error['authentication_error']="Check your Username and Password!";
            $data = ['error'=>$error];
            $this->load->view('template/head');
            $this->load->view('loginpage',$data);

            redirect("http://localhost/Tharanga_Man_Power/login");

        }

    }

    public function logOut(){

        $this->session->sess_destroy();
        redirect("http://localhost/Tharanga_Man_Power/login");
    }

}
