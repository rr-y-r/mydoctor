<?php

class UserModel extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all($id)
    {
        $users = $this->db
            ->get_where('user', array('id' => $id))
            ->result_array();

        return $users;
    }
    
    function get_user(){
        return $this->db->select('*')
            ->order_by('id')
            ->get('user')
            ->result_array();
    }
    
    
    function get_group($username){
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->nama;
    }
    
    function get_nama($username){
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->nama;
    }
    
    function insert($data){
        $this->db->insert('user',$data);
        
        return TRUE;
    }

    public function get_id($username)
    {
        $row = $this->db->get_where('user', array('username' => $username))->row();
        return $row->id;
    }

    public function check_password($id, $password)
    {
        $check = $this->db->get_where('user', array('id' => $id, 'password' => $password));
        
        return ($check->num_rows == 1) ? TRUE : FALSE;
    }

    public function is($x, $y)
    {
        $query = $this->db->get_where('user', array('username' => $x, 'password' => $y));
        
        return ($query->num_rows == 0) ? TRUE : FALSE;
    }
    
    function getData($username){
        $users = $this->db
            ->get_where('user', array('username' => $username))
            ->result_array();

        return $users;
    }

    
    function validation($data){
        $query = $this->db->get_where('user', $data);
        
        return $query->num_rows;
    }

}
