<?php
/**
 * Created by PhpStorm.
 * User: Dineth Kariyawasam
 * Date: 12/16/2017
 * Time: 12:25 PM
 */

class EventModel extends CI_Model{

    public function getEvent(){

        $query = $this->db->query("SELECT EventID,EventTitle,Date FROM event");
        $result = $query->result();
        return $result;

    }

    function getAdminEvent(){

        $this->db->select("EventID,EventTitle,Time,Date,Venue,Organizer,OrganizerPhone,Description");
        $this->db->where('Date>=', date("Y-m-d") );
        $this->db->from('event');
        $query = $this->db->get();
        return $query->result();
    }

    function createEvent($eventdata){

        $this->db->insert('event', $eventdata);

    }

    function deleteEvent($id){

        $this->db->where("EventID", $id);
        $this->db->delete(event);

    }

    function getUpcomingEvent($username){

        $query = $this->db->query("SELECT ep.EventID, e.EventTitle, e.Date, e.Time, e.Venue FROM event_participants ep, event e WHERE ep.Username = '$username' AND ep.EventID = e.EventID");
        return $query->result();

    }


    //update going not going
    function updateGoing($id,$user){

        $query0 = $this->db->query("SELECT EventID,Username FROM event_participants WHERE EventID = $id AND Username = '$user'");
        $result = $query0->result();


        if($result ){
            $query = $this->db->query("UPDATE event_participants SET Going=1 WHERE Username = '$user' AND EventID = $id");
        } else{
            $query = $this->db->query("INSERT INTO event_participants(EventID,Username,Going) VALUES($id,'$user','1')");
        }

        return $query;

    }

    //update going not going
    function updateNotGoing($id,$user){

        $query0 = $this->db->query("SELECT EventID,Username FROM event_participants WHERE EventID = $id AND Username = '$user'");
        $result = $query0->result();


        if($result ){
            $query = $this->db->query("UPDATE event_participants SET Going=0 WHERE Username = '$user' AND EventID = $id");
        } else{
            $query = $this->db->query("INSERT INTO event_participants(EventID,Username,Going) VALUES($id,'$user','0')");
        }

        return $query;

    }

    function getParticipant($id){

        $query = $this->db->query("SELECT u.FirstName, u.LastName,e.Username FROM user u, event_participants e WHERE u.Username=e.Username AND e.EventID=$id AND e.Going = 1");
        return $query->result();

    }

    public function getEventByID($id){

        $this->db->select("EventID,EventTitle,Time,Date,Venue,Organizer,OrganizerPhone, Description");
        $this->db->where('EventID',$id);
        $this->db->from('event');
        $query = $this->db->get();
        return $query->result();

    }

    function checkGoing($id){

        $query = $this->db->query("SELECT Going FROM event_participants WHERE Username = 'amanda' AND EventID = $id");
        return $query->result();
    }


}