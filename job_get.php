<?php
class job_get extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_jobs($data)
    {


        $sql="SELECT job_desc.Job_Title from job_desc where job_desc.Job_ID NOT IN(SELECT job_collection.Job_ID from job_collection where job_collection.Job_Type = '".$data['type']."' AND job_collection.User_ID=".$data['user_id'].")";
        $query = $this->db->mysql_query($sql);
        return $query->result_array();
    }
    public function insert_applied($value)
    {
        $data = array(
            'Job_ID' => $this->input->post('job_id'),
            'User_ID' => $this->input->post('user_id'),
            'Job_Type' => $this->input->post($value),
            );

        return $this->db->insert('job_collection', $data);
    }
    public function insert_job()
    {
        $data= array(
            'Job_Title' => $this->input->post('title'),
            'Job_Desc' => $this->input->post('description'),
            );
        return $this->db->insert('job_desc', $data);
    }
    public function get_posted_job($user_id)
    {
        $sql="select job_desc.Job_Title from job_desc, job_collection where job_desc.Job_ID = job_collection.Job_ID AND job_collection.Job_Type = 'posted' AND job_collection.User_ID=".$user_id;
        $query=$this->db->msql_query($sql);
        return $query->result_array();
    }
}