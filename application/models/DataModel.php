<?php

class DataModel extends CI_Model 
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function getDataStruct($id)
    {
        $data_input = $this->db
            ->get_where('training_data', array('id_training' => $id))
            ->result_array();

        return $data_input;
    }
    
    function insertTDat($data)
    {
        $this->db->insert('training_data',$data);
        return TRUE;
    }
    
    function getDataDiagnosis_all(){
        return $this->db->select('')
            ->get('diagnosis')
            ->result_array();
    }
    
    function getDataGejala_all(){
        return $this->db->select('id_gejala,gejala')
            ->get('gejala')
            ->result_array();
    }
    
    /*
    function getDiagnosis_byToggle($id){
        $data = $this->db->get_where('tpejabat', array('nama' => $assesor))->row();
        return $data->jabatan;
    }
    */
    
    function getDiagnosis_byTrigger($data){
        return $this->db->get_where('rdata',$data)
            ->result_array();
    }

    function getDiagnosis_testing($q1){
        return $this->db->select('q1,q2,q3,q4,q5')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->get()
                ->result_array();
    }

    function getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5){
        switch ($check_counter){
            case 1:

                return $this->db->select('*')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->get()
                ->result_array();
            break;
            case 2:
            return $this->db->select('*')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->or_where('q1',$q2)
                ->or_where('q2',$q2)
                ->or_where('q3',$q2)
                ->or_where('q4',$q2)
                ->or_where('q5',$q2)
                ->get()
                ->result_array();

            break;
            case 3:
            return $this->db->select('*')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->or_where('q1',$q2)
                ->or_where('q2',$q2)
                ->or_where('q3',$q2)
                ->or_where('q4',$q2)
                ->or_where('q5',$q2)
                ->or_where('q1',$q3)
                ->or_where('q2',$q3)
                ->or_where('q3',$q3)
                ->or_where('q4',$q3)
                ->or_where('q5',$q3)
                ->get()
                ->result_array();

            break;
            case 4:
            return $this->db->select('*')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->or_where('q1',$q2)
                ->or_where('q2',$q2)
                ->or_where('q3',$q2)
                ->or_where('q4',$q2)
                ->or_where('q5',$q2)
                ->or_where('q1',$q3)
                ->or_where('q2',$q3)
                ->or_where('q3',$q3)
                ->or_where('q4',$q3)
                ->or_where('q5',$q3)
                ->or_where('q1',$q4)
                ->or_where('q2',$q4)
                ->or_where('q3',$q4)
                ->or_where('q4',$q4)
                ->or_where('q5',$q4)
                ->get()
                ->result_array();

            break;
            case 5:
            return $this->db->select('*')
                ->from("rdata")
                ->where('q1',$q1)
                ->or_where('q2',$q1)
                ->or_where('q3',$q1)
                ->or_where('q4',$q1)
                ->or_where('q5',$q1)
                ->or_where('q1',$q2)
                ->or_where('q2',$q2)
                ->or_where('q3',$q2)
                ->or_where('q4',$q2)
                ->or_where('q5',$q2)
                ->or_where('q1',$q3)
                ->or_where('q2',$q3)
                ->or_where('q3',$q3)
                ->or_where('q4',$q3)
                ->or_where('q5',$q3)
                ->or_where('q1',$q4)
                ->or_where('q2',$q4)
                ->or_where('q3',$q4)
                ->or_where('q4',$q4)
                ->or_where('q5',$q4)
                ->or_where('q1',$q5)
                ->or_where('q2',$q5)
                ->or_where('q3',$q5)
                ->or_where('q4',$q5)
                ->or_where('q5',$q5)
                ->get()
                ->result_array();

            break;
        }
        /*
        return $this->db->select('*')
            ->from("rdata")
            ->where($data)
            ->or_where($data)
            ->or_where($data)
            ->or_where($data)
            ->or_where($data)
            ->get()
            ->result_array();
            */
    }
    
    function get_result($data){
        $id = $this->db->get_where('rdata',$data)
            ->row('id_diagnosis');
        
        $result = $this->db->get_where('diagnosis',array('id_diagnosis'=>$id))->result_array();
        
        return $result;
    }
    
    function init_grid(){
        return $this->db->select('q1')
            ->get('rdata')
            ->result_array();
    }
    
    function get_rdata(){
        return $this->db->select('*')
            ->get('rdata')
            ->result_array();
    }
    
    /*
    
    $this->db->select('k.*');
        $this->db->from('komite_karir k');
        $this->db->join('user u', 'k.nik_kontributor=u.nik ','left');
        $this->db->where('u.department',$group);
        
        return $this->db->get()->result_array();
        
        */
    function get_gejalaByID($id){
        if($id==0){
            return 0;
        }else{
            $row = $this->db->get_where('gejala', array('id_gejala' => $id))->row(1);
            return $row->gejala;
        }
    }
    
    function get_diagnosisByID($id){
        $row = $this->db->get_where('diagnosis', array('id_diagnosis' => $id))->row();
            return $row->diagnosis;
    }

    function get_last_diagnosis(){
        return $this->db->count_all('diagnosis');
    }
    
    function insert_diagnosis($data){
        $this->db->insert('diagnosis',$data);
        return TRUE;
    }

    function insert_rdata($data){
        $this->db->insert('rdata',$data);
        return TRUE;
    }

    function update_diagnosis($data,$id_diagnosis){
        $this->db->where('id_diagnosis', $id_diagnosis);
        $this->db->update('diagnosis', $data); 
        return TRUE;
    }

    function update_rdata($data,$id_diagnosis){
        $this->db->where('id_result', $id_diagnosis);
        $this->db->update('rdata', $data);
        return TRUE;
    }

    function delete_diagnosis($id){
        $this->db->delete('diagnosis', array('id_diagnosis' => $id)); 
        $this->db->delete('rdata', array('id_diagnosis' => $id)); 
    }

    function insert_gejala($data){
        $this->db->insert('gejala',$data);
        return TRUE;
    }

    function update_gejala($data,$id_gejala){
        $this->db->where('id_gejala', $id_gejala);
        $this->db->update('gejala', $data);
        return TRUE;
    }

    function getDiagnomsis_byTriggerTest($data){
        $this->db->get('rdata');
        $this->db->where_in('q1', $data);
        $this->db->or_where_in('q2', $data);
        $this->db->or_where_in('q3', $data);
        $this->db->or_where_in('q4', $data);
        $this->db->or_where_in('q5', $data);
        return $this->db->result_array();
    }

    function select_diagnosis_by_name($diagnosis){
        $id_diagnosis = $this->db->select('id_diagnosis')
            ->get_where('diagnosis', array('id_diagnosis'=>$diagnosis))->row('id_diagnosis');
        
        return $id_diagnosis;

/*
        $this->db->select('id_diagnosis');
        $this->db->get('diagnosis');
        $this->db->where('diagnosis', $diagnosis);
        */
        
    }
    function insert_log($data){
        $this->db->insert('log_diagnosa',$data);
        return TRUE;
    }

    function get_log_all(){
        $this->db->get('log_diagnosa');
    }

    function get_log_byid($id){
        $query = $this->db->get_where('log_diagnosa',array('facebook_id'=>$id))->result_array();
        //$this->db->result_array();

        return $query;
    }
}   