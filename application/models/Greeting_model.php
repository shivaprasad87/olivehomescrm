<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Greeting_model extends MY_Model {

    public function __construct()
    {
   }
   public function checkDOB($dob='')
   {
   	$this->db->select('*')
   	->from('user')
   	->where('active',1)
   	->like('date(user_dob)',date("m-d"));
   	 $query=$this->db->get();
        return $query->result();
   }
   public function prevComments($g_id='')
   {
    $this->db->select('g.*,u.first_name as f_name, u.last_name as l_name, u.profile_pic as user_profile_pic');
    $this->db->from('greetingcomments  g');
    $this->db->join('user u','u.id=g.user_id','left');
    $this->db->where('g.g_id',$g_id);
    $this->db->order_by('g.date_added','desc');
    $query=$this->db->get();
        return $query->result();
   }
   public function checkJA($value='')
   {
   $this->db->select('*')
    ->from('user')
    ->where('active',1);
     $query=$this->db->get();
   return $query->result();
   }
}
?>