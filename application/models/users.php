<?php
class users extends CI_Model{

    # Function to add Users
    function insert_user($data){
        $this->db->insert('users', $data);
    }

    public function get_user(){
        $q = $this->db->get('users');
        $result = $q->result();
        // Returning fetched Users
        return $result;
    }

    public function get_usersById($id){
        $q = $this->db->where('id', $id)->get('users');
        $result = $q->result();
        // Returning fetched Users
        return $result;
    }

    public function update_user($update, $id){
        $this->db->where('users', $id);
        $this->db->update('users', $update);
    }

    # Function to delete User by id
    public function remove_user($id){
        $this->db->where('users', $id);
        $this->db->delete('users');
    }
    public function get_course(){
        $q = $this->db->get('course');
        $result = $q->result();
        // Returning fetched courses
        return $result;
    }
}
?>