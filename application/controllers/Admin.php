<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('dataModel');
    }
    
    public function index()
    {  

        $this->load->view('admin');

    }
    
    public function testGet()
    {
        $d_data = $this->dataModel->getDataDiagnosis_all();
        
        $this->load->view('test_get', array(
            'diagnosis_data'=>$d_data));
    }
    
    function get_data_counter($check_counter){
        
        switch ($check_counter) {
            case 1:
                $data = array(
                    'q1' => $this->input->post('q1')
                );
                return $data;
                break;
            case 2:
                $data = array(
                    'q1' => $this->input->post('q1'), 
                    'q2' => $this->input->post('q2')
                );
                return $data;
                break;
            case 3:
                $data = array(
                    'q1' => $this->input->post('q1'), 
                    'q2' => $this->input->post('q2'), 
                    'q3' => $this->input->post('q3')
                );
            return $data;
                break;
            case 4:
                $data = array(
                    'q1' => $this->input->post('q1'), 
                    'q2' => $this->input->post('q2'), 
                    'q3' => $this->input->post('q3'),
                    'q4' => $this->input->post('q4')
                );
            return $data;
                break;
            case 5:
                $data = array(
                    'q1' => $this->input->post('q1'), 
                    'q2' => $this->input->post('q2'), 
                    'q3' => $this->input->post('q3'),
                    'q4' => $this->input->post('q4'),
                    'q5' => $this->input->post('q5')
                );
            return $data;
                break;
            
        }
        
    }
    
    function test_print($check_counter){
        $i=0;$x=0;
        $q1=0;$q2=0;$q3=0;$q4=0;$q5=0;
        $data_temp=[];
        $data_output=[];
        $data_diagnosa;
        $new_data=[];
        $length_data=[];$as=0;
        
        get_data_counter($check_counter);
        
        foreach($data as $index => $value){
            //$new_data=array($index => $value);//echo 'index'.$index;
            $data_diagnosa = $this->dataModel->getDiagnosis_byTrigger($data);
            //$length_data[$x]=count($data_diagnosa);//echo '(index-> '.$index.'||count : '.$length_data[$x].')';//$x++;
            foreach($data_diagnosa as $data_row){
                foreach($data_row as $column => $value){
                    if($value!=0){
                        if($column == 'q1'){
                            $data_temp[$column][$q1] = $value;
                            $q1++;
                        }
                        if($column == 'q2'){
                            $data_temp[$column][$q2] = $value;
                            $q2++;
                        }
                        if($column == 'q3'){
                            $data_temp[$column][$q3] = $value;
                            $q3++;
                        }
                        if($column == 'q4'){
                            $data_temp[$column][$q4] = $value;
                            $q4++;
                        }
                        if($column == 'q5'){
                            $data_temp[$column][$q5] = $value;
                            $q5++;
                        }
                    }
                }
            }
        }

        $q=array('q1','q2','q3','q4','q5');
        for($r=0;$r<count($data_temp);$r++){
            if(count($data_temp[$q[$r]][0])!=0){
                $data_output[$r]=array_unique($data_temp[$q[$r]]);
                
            }
        }

        $data_json = json_encode($data_output);        
        
        if($data_output != NULL){
          echo $data_json;  
            //echo array_values($data_output[0]);
        }
        
    }
    
    function apps(){
        $d_data = $this->dataModel->getDataGejala_all();
        
        $this->load->view('apps', array(
            'gejala_data'=>$d_data));
    }
    
    function init_grid(){
        
        $data = $this->dataModel->init_grid();
        
        $temp=array(); 
        $dataout=array(); 
        $griddata=array();
        $i=0;
        $x=0;
        
        foreach($data as $data_query){
            foreach($data_query as $row => $value){
                $temp[$i]=$value;
                $i++;
            }
        }
        asort($temp);
        $dataout = array_unique($temp);
        
        foreach($dataout as $data_val => $value){
                $griddata[$x]=$value;
                $x++;
        }
/*
        for($n=0;$n<count($data);$n++) { 
            $temp[$n]=array_unique($data[$n]); 
            
        } 
        
        $dataout=array_unique($temp);*/
        //$mat=array_unique($temp); 
        

        //$data_output = array_values(array_unique($data));
        
        $json_dat = json_encode($griddata);
        echo $json_dat;
    }
    
    public function addTrainingData()
    {
        $TDataStruct = $this->dataModel->getDataStruct(1);
        
        foreach($TDataStruct as $data => $data_value)
        {
            foreach($data_value as $row => $row_value)
            {
                if($row <> "id_training")
                {

                    $data_input[$row] = $this->input->post($row);
                    
                }
            }
        }
        
        $is_added = $this->dataModel->insertTDat($data_input);
        
        if ($is_added) 
            {
                $message = "Data  berhasil ditambahakan !";
                $this->json_response(TRUE, $message);
            } 
            else 
            {
                $message = "tambah data gagal";
                $this->json_response(FALSE, $message);
            }
    }
    
    function get_diagnosa_result($check_data){
        $data_set = array();
        
        $data_set = get_data_counter($check_data);
        
        echo '$check_data';
    }
    
    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }

}
    
   