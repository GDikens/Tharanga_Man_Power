<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/16/2017
 * Time: 10:27 PM
 */

class AdminController extends CI_Controller {

    public function index($status){


        if($this->session->userdata('user_type')=='Admin'){

            $status = 3;
            $id = ['status'=>$status];

//            $day = array(
//                'Mon' => 1,
//                'Tue' => 2,
//                'Wed' => 3,
//                'Thu' => 4,
//                'Fri' => 5,
//                'Sat' => 6,
//                'Sun' => 7
//            );
//
//            date_default_timezone_set("Asia/Colombo");
//
//            $current_year = date("Y");
//            $previous_month = (date("m")-1);
//            $days_for_previous_month = date("t", mktime(0,0,0, date("n") - 1));
//            $days_for_current_month = date("t", mktime(0,0,0, date("n")));
//            $first_day = (new DateTime('first day of this month'))->format('D');
//            $index_first_day = $day[$first_day];
//            $current_date = date("Y-m-d");
//
//            $month_first_day = ($days_for_previous_month - $index_first_day) + 2;
//            $date = $current_year."-".$previous_month."-".$month_first_day;
//
//            $data = array(
//                'date' => $date,
//                'day'=> $month_first_day,
//                'days_for_previous_month' => $days_for_previous_month,
//                'days_for_current_month' => $days_for_current_month,
//                'current_date' => $current_date
//            );



            //$this->load->model('EventModel');
            //$query = $this->EventModel->getEvent();

            //$result = ['data'=>$data,'event'=>$query];

            $this->load->view('template/head');
            $this->load->view('template/style');
            $this->load->view('template/topbar',$id);
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/calendar');

        } else {
            redirect("http://localhost/Event-Management-System/login");
        }

    }

}