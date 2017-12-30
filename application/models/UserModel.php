<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/16/2017
 * Time: 6:18 PM
 */

class UserModel extends CI_Model{

    public function checkUser($data){

        $username = $data['username'];
        $password = $data['password'];

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('Username',$username);
        $this->db->where('Password',$password);
        $result = $this->db->get()->result();

        return $result;
    }

    public function getUserDetails($data){

        $UserID = $data['UserID'];

        $this->db->select('FirstName,LastName,Email,Address,ContactNo,Faculty,Position,profile_image');
        $this->db->from('user');
        $this->db->where('UserID',$UserID);
        $result = $this->db->get()->result();

        return $result;

    }

    function createUser($userdata){

        $this->db->insert('user', $userdata);

    }

}