<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/17/2017
 * Time: 11:36 AM
 */

class TaskModel extends CI_Model{


    function createTask($taskdata){
        $this->db->insert('task', $taskdata);

    }

    function getTask(){

        $this->db->select("TaskID, Username, Description, Deadline");
        $this->db->where('Deadline>=', date("Y-m-d") );
        $this->db->from('task');
        $query = $this->db->get();
        return $query->result();

    }

    function deleteTask($id){

        $this->db->where("TaskID", $id);
        $this->db->delete(task);

    }

    function getTLTask($username){

        $query = $this->db->query("SELECT Description, Deadline FROM task WHERE Username = '$username'");
        return $query->result();
    }

}