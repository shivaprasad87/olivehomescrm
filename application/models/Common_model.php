<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends MY_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function all_active_managers(){
    	$this->db->select();
        $this->db->from('user');
        $this->db->order_by('id','desc');
        $this->db->where('active',1);
        $this->db->where('type','2');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_departments(){
        $this->db->select()
            ->from('department')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_advisors(){

        $this->db->select('u.*')
            ->distinct()
            ->from('callback as cb')
            ->join('user as u','u.id=cb.user_id')
            ->order_by('u.id');
            if($this->session->userdata("user_type")=="manager") {
             $this->db->where("(cb.user_id in(select id from user where reports_to ='".$this->session->userdata('user_id')."') OR cb.user_id = ".$this->session->userdata('user_id').")", NULL, FALSE);
        }
        return $this->db->get()->result();
    }

    public function get_id($table,$name){
        $this->db->select('id');
        $this->db->from($table);
        $this->db->where("name like '$name'",NULL,false);
        $query=$this->db->get();
        $result=$query->result();
        if (array_key_exists(0, $result))
            $result = $result[0];
        return ($result!==array())?$result->id:false;
    }

    public function all_active_callback_types(){
        $this->db->select();
        $this->db->from('callback_type');
        $this->db->order_by('id','desc');
        $this->db->where('active',1);
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_projects(){
        $this->db->select()
            ->from('project')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_lead_sources(){
        $this->db->select()
            ->from('lead_source')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_brokers(){
        $this->db->select()
            ->from('broker')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_statuses(){
        $this->db->select()
            ->from('status')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_cities(){
        $this->db->select()
            ->from('city')
            ->where('active',1)
            ->order_by('name','asc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_states(){
        $this->db->select();
        $this->db->from('state');
        $this->db->order_by('id','desc');
        $this->db->where('active',1);
        $query=$this->db->get();
        return $query->result();
    }

    public function all_active_builders(){
        $this->db->select();
        $this->db->from('builder');
        $this->db->order_by('id','desc');
        $this->db->where('active',1);
        $query=$this->db->get();
        return $query->result();
    }

    public function all_cities(){
        $this->db->select('city.*,state.name as state_name');
        $this->db->join('state','state.id = city.state_id');
        $this->db->from('city');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_states(){
        $this->db->select();
        $this->db->from('state');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_depts(){
        $this->db->select();
        $this->db->from('department');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_lead_sources(){
        $this->db->select();
        $this->db->from('lead_source');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_projects(){
        $this->db->select('project.*,builder.name as builder_name,city.name as city_name');
        $this->db->join('builder','builder.id = project.builder_id','left');
        $this->db->join('city','city.id = project.city_id','left');
        $this->db->from('project');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_builders(){
        $this->db->select();
        $this->db->from('builder');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_brokers(){
        $this->db->select();
        $this->db->from('broker');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_callback_types(){
        $this->db->select();
        $this->db->from('callback_type');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function all_statuses(){
        $this->db->select();
        $this->db->from('status');
        $this->db->order_by('id','desc');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_project_name($id){
        $this->db->select('name');
        $this->db->from('project');
        $this->db->where('id',$id);
        $query=$this->db->get();
        $project = $query->row();
        return isset($project->name)?$project->name:"";
    }

    public function get_leadsource_name($id){
        $this->db->select('name');
        $this->db->from('lead_source');
        $this->db->where('id',$id);
        $query=$this->db->get();
        $lead_source = $query->row();
        return isset($lead_source->name)?$lead_source->name:"";
    }

    public function get_department_name($id){
        $this->db->select('name');
        $this->db->from('department');
        $this->db->where('id',$id);
        $query=$this->db->get();
        $department = $query->row();
        return isset($department->name)?$department->name:"";
    }

    public function get_city_name($id){
        $this->db->select('name');
        $this->db->from('city');
        $this->db->where('id',$id);
        $query=$this->db->get();
        $city = $query->row();
        return isset($city->name)?$city->name:"";
    }

    public function get_status_name($id){
        $this->db->select('name');
        $this->db->from('status');
        $this->db->where('id',$id);
        $query=$this->db->get();
        $status = $query->row();
        return isset($status->name)?$status->name:"";
    }

    public function duplicate_check($table,$name){
        $this->db->select();
        $this->db->from($table);
        if($table == "user")
            $this->db->where('emp_code',$name);
        else
            $this->db->where('name',$name);
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    public function toggle_status($table,$id){
        $this->db->select('active');
        $this->db->from($table);
        $this->db->where('id',$id);
        $result=$this->db->get()->result();
        if(count($result) > 0){
            $active = $result[0]->active;
            $newStatus = $active?0:1;
            $query=$this->db->update(
                $table,
                array(
                    'active'=>$newStatus
                ),
                array(
                    'id'=>$id
                )
            );
            return $newStatus;
        }
        return false;
    }


    function checkExistsDeadReason($clause) {
        $this->db->select('id');
        $sql = $this->db->get_where('dead_reason', $clause);
        return $sql->num_rows();
    }
    
    function insertDeadReason($params) {
        $this->db->insert('dead_reason', $params);
        return $this->db->insert_id();
    }
    
    function updateDeadReason($params, $id) {
        $this->db->where('id', $id);
        if ($this->db->update('dead_reason', $params))
            return true;
        else
            return false;
    }

    function getDeadReasons($where=null){
        $this->db->from('dead_reason');
        if($where)
            $this->db->where($where);
        $query=$this->db->get();
        return $query->result_array();
    }
    function deleteDeadReasons($id){
        $this->db->delete('dead_reason', array('id' => $id));
        return true;
    }

    function getNavbarByClause($clause){
        $q = $this->db->get_where('tbl_modules', $clause);
        return $q->result_array();
    }

    function postAccessQuery($params){
        $this->db->insert('tbl_privilege', $params);
        return $this->db->insert_id();
    }

    function updateAccessQuery($clause, $params){
        $this->db->where($clause);
        if($this->db->update('tbl_privilege', $params))
            return true;
        else
            return false;
    }

    function checkModulePermission($clause) {
        $q = $this->db->get_where('tbl_privilege', $clause);
        return $q->row_array();
    }

    function deleteAccess($clause){
        $this->db->delete('tbl_privilege', $clause);
        return true;
    } 
     function get_online_leads($table_name = '',$lead_source='', $perpage = NULL, $offset = NULL)
     {
        $d=0;
        $this->db-> where('source',$lead_source)
            ->where('saved',$d);

           // ->order_by('name','asc');
        //$query=$this->db->get();
        return (is_null($perpage) or is_null($offset)) ? $this->db->get($table_name)->result() : $this->db->get($table_name, $perpage, $offset)->result();
        //return $query->result();
     }

        function save_online_leads($leads)
            {
                
                //echo $leads->leads->lead[0]->name;
                $count= $leads->count; 
                $source="Magicbricks";
                //print_r($leads);die;
                 if(!empty($leads)){
                            for ($x = $count-1; $x >= 0; $x--) {
                                $source;
                                $name=$leads->leads->lead[$x]->name;
                                $mobile=$leads->leads->lead[$x]->mobile; 
                                $email= $leads->leads->lead[$x]->email; 
                                $projectname=$leads->leads->lead[$x]->project;
                                $id=$leads->leads->lead[$x]->id; 
                                $notes=$leads->leads->lead[$x]->msg;
                                $date=$leads->leads->lead[$x]->dt;
                                $project_id=$leads->leads->lead[$x]->loginid;
                                   $lead_date=date("Y-m-d", strtotime($date));
                            
                            $query1="select count(*) as count from online_leads where phone='$mobile'";
                            $usercount=  $this->db->query($query1);
                            if ( $usercount->num_rows() > 0 )
                             {
                              $row = $usercount->row_array();
                            //  print_r($row);
                              $userscount= $row['count'];
                              {
                                $bid=2;
                                  if($userscount<=0)
                                  {
                                    if(!empty($projectname))
                                    $this->insert_newproject($projectname, $bid);
                                else
                                    $this->insert_newproject('Magicbricks', $bid);
                                    $query="insert into online_leads(source,name,phone,email,project,leadid,notes,lead_date,project_id) values('$source','$name','$mobile','$email','$projectname','$id','$notes','$lead_date','$project_id')";
                                $this->db->query($query);  

                                  }
                              }
                             }
                                }
                        }
                        else
                        {
                           
                        }
            }

            function save_online_leads_99acres($temp)
            {
                if(!empty($temp))
                {
                    $source="99acres";

                    $i=0;
                    foreach ($temp as $leads) {

                        $phone =$leads['phone'];
                        $name=$leads['name'];
                        $mobile=$leads['phone'];
                        $email=$leads['email'];
                        $projectname=$leads['project'];
                        $id=$leads['leadid'];
                        $lead_date=$leads['lead_date'];
                        $notes=$leads['notes'];
                        $lead_date=$leads['lead_date'];
                        $project_id=$leads['leadid'];

                        

                         $query1="select count(*) as count from online_leads where phone='$phone '";
                            $usercount=  $this->db->query($query1);
                            if ( $usercount->num_rows() > 0 )
                             {
                              $row = $usercount->row_array();
                            //  print_r($row);
                              $userscount= $row['count'];
                              {
                                $bid=1;
                                  if($userscount<=0 && $name!='')
                                  {
                                    if(!empty($projectname))
                                    $this->insert_newproject($projectname,$bid);
                                else
                                    $this->insert_newproject('99acres',$bid);
                              $query="insert into online_leads(source,name,phone,email,project,leadid,notes,lead_date,project_id) values('$source','$name','$mobile','$email','$projectname','$id','$notes','$lead_date','$project_id')";
                                $this->db->query($query);

                                  }
                              }
                             }
                             $i++;
                       
                    }

            }
        }

           function updateWhere_leadid($where,$data=1,$table_name='online_leads')
            {
                $this->db->set('saved',1);
                $this->db->where($where);
                $this->db->update('online_leads'); 
            //     print_r($where);die;
            //   foreach ($where as $leadid) {
            //    // print_r($where);die;
            //     $this->db->set('saved',1);
            //     $this->db->where('id', $leadid['id']);
            //     $this->db->update('online_leads');       
            // }
               // echo $this->db->last_query();die;
            return true;
            }
       

        function getsourceId($sourcename)
        {
            $this->db->select('id');
            $this->db->from('lead_source');
            $this->db->where('name',$sourcename);
            $query=$this->db->get();
            return $query->row_array();
        }

        function insert_newproject($p_name,$bid)
        {
            //exit;
            $stmt="select count(*) as count from project where name='$p_name' and builder_id=$bid";    
            $p_count=$this->db->query($stmt);
            if ( $p_count->num_rows() > 0 )
            {
            $row = $p_count->row_array();
            $count=$row['count'];
            //echo $count;die;
            if($count<=0)
            {
            $date=date('Y-m-d h:m:s');
            $stmt1="insert into project (name,builder_id,date_added)values('$p_name',$bid, '$date');"; 
            //echo $stmt1;die; 
            $this->db->query($stmt1);
            }

            }
                         
        }

        function get_project_id_by_name($p_name,$bid)
        {
            if($bid!=null)
            {
            $this->db->select('id')
                    ->from('project')
                    ->where('name',$p_name)
                    ->where('builder_id',$bid);
           // $stmt2="select id from project where name = '$p_name'";
            //echo $stmt2;die;
           // $this->db->query();
            $query=$this->db->get();
            return $query->row_array();
        }
        else
        {
             $this->db->select('id')
                    ->from('project')
                    ->where('name',$p_name);
            $query=$this->db->get();
            return $query->row_array();
        }

        }
        function lead_count($sourcename,$date)
        {
                $this->db->select('count(*) as count')
                         ->from('online_leads')
                         ->where('lead_date',$date)
                         ->where('source',$sourcename);
                         $query=$this->db->get();
                         return $query->row_array();
        }
        function total_lead_count($sourcename)
        {
                $this->db->select('count(*) as count')
                         ->from('online_leads')
                         ->where('source',$sourcename);
                         $query=$this->db->get();
                         return $query->row_array();

        }
         function search_online_leads($fromdate,$todate,$project,$searchVal,$lead_source,$where)
        {
            if($project&&$searchVal!='')
            {
            $d=0;
       $this->db->select('count(*) as count')

            ->from('online_leads')
            ->where('source',$lead_source)
            ->where('saved',$d)
            ->where('project',$project)
            ->where("project like '%$searchVal%'")
            ->or_where("name like '%$searchVal%'")
            ->or_where("phone like '%$searchVal%'")
            ->or_where("email like '%$searchVal%'");
            if($where)
            $this->db->where($where,null,false);
        $query=$this->db->get();
        //echo $this->db->last_query();die;
        return $query->row_array();
            }
            elseif ($project!='') {
           $d=0;
        $this->db->select('count(*) as count ')
   
            ->from('online_leads')
            ->where('source',$lead_source)
            ->where('saved',$d)
            ->where('project',$project);
            if($where)
            $this->db->where($where,null,false);
        $query=$this->db->get();
        return $query->row_array();
            }
            elseif($searchVal!='')
            {
            $d=0;
       $this->db->select('count(*) as count')
            ->from('online_leads')
            ->where('source',$lead_source)
            ->where('saved',$d)
            ->where("project like '%$searchVal%'")
            ->or_where("name like '%$searchVal%'")
            ->or_where("phone like '%$searchVal%'")
            ->or_where("email like '%$searchVal%'");
            if($where)
            $this->db->where($where,null,false);
        $query=$this->db->get();
        return $query->row_array();
            }

        }
         public function l_s_source_credentials($data='',$l_s_name='')
        {
           $this->db->where('l_s_name', $l_s_name);
        if ($this->db->update('l_s_credentials', $data))
            return true;
        else
            return false;
        }
        public function load_l_s_credentials($l_s_name='')
        {
        $this->db->select('*');
        $this->db->from('l_s_credentials'); 
        $this->db->where('l_s_name',$l_s_name);
        $query=$this->db->get();
        return $query->result();

        }
        function save_commonfloor_online_leads($datalead,$numrows)
        {

            $source="Commonfloor";
           // print_r($datalead);
           // echo $numrows;echo $datalead[0]['contact_mobile'];
          
            $numrows=$numrows-1;
         //   echo $numrows;
          //    die;
            $a=1;
            while ($numrows>=$a) {
               
            foreach ($datalead as $data) {
                if(!is_array($data['contact_name']))
                {
                    $phone =$data['contact_mobile'];
                        $name=$data['contact_name'];
                        $email=$data['contact_email'];
                        $projectname=$data['project_or_locality_name'];
                        $notes=$data['details'];
                        $lead_date=date("Y-m-d", strtotime($data['shared_on']) );
                        $project_id=$data['seq_id'];
                         $query1="select count(*) as count from online_leads where phone='$phone'";
                            $usercount=  $this->db->query($query1);
                            if ( $usercount->num_rows() > 0 )
                             {
                              $row = $usercount->row_array();
                              $userscount= $row['count'];
                              {
                                $bid=3;
                                  if($userscount<=0 && $name!='')
                                  {
                                    if(!empty($projectname))
                                    $this->insert_newproject($projectname,$bid);
                                else
                                    $this->insert_newproject('commonfloor',$bid);
                            $query="insert into online_leads(source,name,phone,email,project,leadid,notes,lead_date,project_id) values('$source','$name','$phone','$email','$projectname','$project_id','$notes','$lead_date','$project_id')";
                            //echo $query;
                                $this->db->query($query);
                                 //$this->db->last_query();die;
                                  }

                              }
                             }   
                    
                }  
                          } $a++; 
            }

           
        }
            public function count_onlineleads($table_name = '',$source='') {
        if ($table_name == '')
            $table_name = $this->table_name;
            $this->db->select('*')
            ->from('online_leads')->where('saved',0)
            ->where('source',$source);
            $query = $this->db->get(); 
             
        return $query->num_rows();
    }
    public function track_users($value='')
    {
       $this->db->select('*')
       ->from('user')
       ->where('date(last_login)',date('Y-m-d'))
       ->where('type',1);
       $query=$this->db->get();
        return $query->result_array();

    }public function get_where_groupby($data='',$table_name='',$group_by='')
    {
        $query = $this->db->select("*")
        ->group_by($group_by)
        ->where($data)
        ->from($table_name);
        return $query->get()->result();

    }
    /*public function get_users_for_assign($data='',$table_name='')
    {
       $query = $this->db->select("id, online_lead_count") 
        ->where("type=1 and online_lead_count = (select min(online_lead_count) from user where `city_id` = ".$data['city_id']." AND `type` = 1 AND `active` = 1 AND date(last_update) = '".date('Y-m-d')."' ) limit 1")
        ->from($table_name);
        return $query->get()->result();
    }*/
    public function get_users_for_assign($p_id='',$table_name='')
    {
        /******
        assign leads to only active users not only for recent/today login user (12-10-2021)
        **/
       $query = $this->db->select("id, online_lead_count") 
        ->where("type!=5 and online_lead_count = (select min(online_lead_count) from user where`type` != 5 AND `active` = 1 and CAST(assignedProjects as CHAR) like ".'"%'.$p_id.'%"'." limit 1) and id = (select id from user where`type` != 5 AND `active` = 1 and CAST(assignedProjects as CHAR) like ".'"%'.$p_id.'%"'." limit 1)")
        ->from($table_name);
        return $query->get()->result();
    }


    public function userCountplus($id='')
    {
        $sql ='UPDATE user SET online_lead_count = online_lead_count+1  WHERE id =?';
        $query = $this->db->query($sql, array($id)); 
        if ($query)
            return true;
        else
            return false;
    }

     public function make_count_zero($id='')
    {
        $sql ='UPDATE user SET online_lead_count = 0';
        $query = $this->db->query($sql); 
        if ($query)
            return true;
        else
            return false;
    }
     function getProjectList($clause){
        $q = $this->db->get_where('project', $clause);
        return $q->result_array();
    }
    function checkModuleProject($clause) {
        $q = $this->db->get_where('user', $clause);
        return $q->row_array();
    } 
     function postAccessQueryProject($params){
        $this->db->insert('user', $params);
        return $this->db->insert_id();
    } 
    function updateAccessQueryProject($clause, $params){
        $this->db->where($clause);
        if($this->db->update('user', $params))
            return true;
        else
            return false;
    }
            function get_project_details($id){
        $this->db->select('p.*,c.id as city_id,c.name as city,b.name as builder,b.id as builder_id');
        $this->db->from('project as p');
        $this->db->join('city as c','c.id=p.city_id','LEFT');
        $this->db->join('builder as b','b.id=p.builder_id','LEFT'); 
        $this->db->where('p.id',$id);
        $query=$this->db->get();
        return $query?$query->row():false;
    }
     public function updateProject($where, $data, $table_name = '') {
        if ($table_name == '')
            $table_name = $this->table_name;
        return $this->db->where($where)->update($table_name, $data);
    }
    public function getNextThreeHolidays($table='')
    {
        $ar = array('(city = 0 or city ='.$this->session->userdata('user_city_id').")");
        $query = $this->db->select('*')
        ->from($table)
        ->where('holiday_date >=',date('Y-m-d'))
        ->where($ar['0'])
        ->order_by('holiday_date','ASC')
        ->limit('3');
         return $query->get()->result();
    }

    public function get_emp_target($year='',$id='',$month='')
    {
        if(date("m")<=3)
            $year = $year+1;
        $this->db->select('*');
        $this->db->from('emp_target');
        $this->db->where('year',$year);
        $this->db->where('user_id',$id);
        if($month)
        $this->db->where('month',$month);
        $query=$this->db->get();
        $year_target = $query->row_array();
        return is_null($year_target)?0:$year_target; 
    }
    public function get_emp_target_all_months($year='',$id='',$month='')
    {
        $target_data = array();
        for ($i=1;$i<=12;$i++) {
        if(date("m")<=3)
            $year = $year+1;
        $this->db->select('*');
        $this->db->from('emp_target');
        $this->db->where('year',$year);
        $this->db->where('user_id',$id); 
        $this->db->where('month',$i);
        $query=$this->db->get();
        $target_data[$i] = $query->row_array();
         }
        return $target_data; 
    }


       }
