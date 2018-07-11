<?php


class user extends CI_Model
{
 public function add(){
     $data = array(
         'emai' =>  $this->input->post('email'),
         'password' =>  $this->input->post('password'),

     );

     return $this->db->insert('mytable', $data);

 }
    public function get(){
        return $this->db->get('mytable');
    }

    public function search(){

        $query =$this->db->query('SELECT * FROM mytable WHERE emai = ?',$this->input->post('email'));
        return $query;
    }
}