<?php

class master_model extends CI_Model
{
    
    function __construct()
    {
        $this->load->database();
    }

    public function insert($data, $tablename)
    {
    
        $this->db->insert($tablename, $data);
       //echo $this->db->last_query();
        return $this->db->insert_id();
           
    }
    
    public function get_row($email , $password , $tablename){

        $sql = "Select *  From $tablename Where username = '$email' and password = '$password'";
        $query=$this->db->query($sql);
        //echo $this->db->last_query();die();
        return $query->row_array();
    }

    public function update($data, $tablename, $where)
    {

        if ($where) {
            foreach ($where as $key => $value) {
                
                $this->db->where($key, $value);
            }
        }
        //var_dump($where);die;
        $this->db->update($tablename, $data);
        //echo $this->db->last_query();exit;
        return true;       
    }
	
	public function getMaster($tablename, $where = FALSE, $join = FALSE, $order = false, $field = false, $select = false,$limit=false,$start=false, $search=false)
    {

		if($limit){
			$this->db->limit($limit, $start);
		}
		if ($search) {
                $where = $this->searchString($search);
                $query = $this->db->get_where($tablename, $where);
        } 
        if ($where) {
            $this->db->where($where, NULL, FALSE);
        }
        if ($order && $field) {
            $this->db->order_by($field, $order);
        }
        if ($join) {
            if (count($join) > 0) {
                foreach ($join as $key => $value) {
                    $explode = explode('|', $value);
                    $this->db->join($key, $explode[0], $explode[1]);
                }
            }
        }
        if ($select) {
            $this->db->select($select, FALSE);
        } else {
            $this->db->select('*');
        }
		$query = $this->db->get($tablename);
        //echo "<pre>";
        //echo $this->db->last_query();
        return $query->result_array();
    }
}
?>