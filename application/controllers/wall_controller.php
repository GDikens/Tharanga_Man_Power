<?php
class Wall_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
//			$this->load->library('upload');
//			$this->load->model('wall_model');
		}


	function index() {

	    $status = 1;

	    $id = ['status' => $status];

		//$from_session_id = $this->session->userdata('UserID');

		//$data['user_data'] =  $this->wall_model->get_user_data($from_session_id);

		//$data['post_data'] = $this->wall_model->get_post();



        $this->load->view('template/head');
        $this->load->view('template/style');
        $this->load->view('template/topbar');
        if($this->session->userdata('user_type')=='Admin'){
            $this->load->view('Admin/navbar',$id);
            $this->load->view('Admin/wall_ui');
        }

	}


	// //timeAgo Function
	// 	public function timeAgo($time_ago){

	// 		$time_ago = strtotime($time_ago);
	// 		$cur_time   = time();
	// 		$time_elapsed   = $cur_time - $time_ago;
	// 		$seconds    = $time_elapsed ;
	// 		$minutes    = round($time_elapsed / 60 );
	// 		$hours      = round($time_elapsed / 3600);
	// 		$days       = round($time_elapsed / 86400 );
	// 		$weeks      = round($time_elapsed / 604800);
	// 		$months     = round($time_elapsed / 2600640 );
	// 		$years      = round($time_elapsed / 31207680 );
	// 		// Seconds
	// 		if($seconds <= 60){
	// 		    return "just now";
	// 		}
	// 		//Minutes
	// 		else if($minutes <=60){
	// 		    if($minutes==1){
	// 		        return "one minute ago";
	// 		    }
	// 		    else{
	// 		        return "$minutes minutes ago";
	// 		    }
	// 		}
	// 		//Hours
	// 		else if($hours <=24){
	// 		    if($hours==1){
	// 		        return "an hour ago";
	// 		    }else{
	// 		        return "$hours hrs ago";
	// 		    }
	// 		}
	// 		//Days
	// 		else if($days <= 7){
	// 		    if($days==1){
	// 		        return "yesterday";
	// 		    }else{
	// 		        return "$days days ago";
	// 		    }
	// 		}
	// 		//Weeks
	// 		else if($weeks <= 4.3){
	// 		    if($weeks==1){
	// 		        return "a week ago";
	// 		    }else{
	// 		        return "$weeks weeks ago";
	// 		    }
	// 		}
	// 		//Months
	// 		else if($months <=12){
	// 		    if($months==1){
	// 		        return "a month ago";
	// 		    }else{
	// 		        return "$months months ago";
	// 		    }
	// 		}
	// 		//Years
	// 		else{
	// 		    if($years==1){
	// 		        return "one year ago";
	// 		    }else{
	// 		        return "$years years ago";
	// 		    }
	// 		}
	// 	}

}