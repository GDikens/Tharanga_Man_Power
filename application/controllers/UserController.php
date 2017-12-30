<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/17/2017
 * Time: 4:21 AM
 */

class UserController extends CI_Controller{

    public function index($status){

        $status = 1;
        $id = ['status'=>$status];

        $this->load->view('template/head');
        $this->load->view('template/style');
        $this->load->view('template/topbar',$id);
        $this->load->view('navbar',$id);
        $this->load->view('registerpage');

    }

    public function createUser(){

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.Email]');
        $this->form_validation->set_rules('address_line_1', 'Address', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric|min_length[9]');
        $this->form_validation->set_rules('faculty', 'Faculty', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.Username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->model('UserModel');
            $status = 0;
            $id = ['status'=>$status];

            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar');
            $this->load->view('navbar',$id);
            $this->load->view('registerpage');

        } else {

            $userdata=array(


                'FirstName'=>$this->input->post('first_name'),
                'LastName'=>$this->input->post('last_name'),
                'Email'=>$this->input->post('email'),
                'Address'=>$this->input->post('address_line_1'),
                'ContactNo'=>$this->input->post('contact_no'),
                'Faculty'=>$this->input->post('faculty'),
                'Position'=>$this->input->post('position'),
                'Function'=>$this->input->post('function'),
                'Username'=>$this->input->post('username'),
                'Password'=>$this->input->post('password')
            );


            $this->load->Model('UserModel');
            $this->UserModel->createUser($userdata);

            //set redirect page to respective home page
            redirect('http://localhost/Event-Management-System/login');



        }

    }

}