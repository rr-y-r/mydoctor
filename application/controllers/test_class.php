<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Test_class extends CI_Controller
{
	

	public function __construct()
    {
        parent::__construct();

        $this->load->model('dataModel');
    }



	public function index(){
		$d_data = $this->dataModel->getDataGejala_all();
        
        $this->load->view('test_new_apps', array(
            'gejala_data'=>$d_data));
		//$this->load->view('test_new_apps');
	}

	public function diag_process($check_counter){

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


	var $diag_data=[];

    public function getDiagData_q1(){
    	$q1=$this->input->post('q1');

    		 $diag_q1 = array_column($this->dataModel->getDiagnosis_testing($q1),'q1');
    		 $diag_q2 = array_column($this->dataModel->getDiagnosis_testing($q1),'q2');
    		 $diag_q3 = array_column($this->dataModel->getDiagnosis_testing($q1),'q3');
    		 $diag_q4 = array_column($this->dataModel->getDiagnosis_testing($q1),'q4');
    		 $diag_q5 = array_column($this->dataModel->getDiagnosis_testing($q1),'q5');



    		 $diag_temp = array_merge($diag_q1,$diag_q2,$diag_q3,$diag_q4,$diag_q5);
    		 $diag_fix = array_unique($diag_temp);
    		 echo json_encode(array_values($diag_fix));
    }

    public function get_result_from_q1(){
    	$q1=$this->input->post('q1');
    	echo json_encode(array_column($this->dataModel->getDiagnosis_testing($q1),'id_result'));
    }

    public function get_result_q1($q1){
    	return array_column($this->dataModel->getDiagnosis_testing($q1),'id_result');
    }

    public function getDiagData_q2(){
    	$besar_array=$this->input->post('length');
    	
    	for($i=1;$i<$besar_array;$i++){
    		//$rdata[$i-1] = $this->input->post($i);
    		$diagnosis_data[$i-1] = $this->dataModel->get_result2($this->input->post($i));
    	}

    	//$data_result_arr = array('id_result_1' => $this->input, );


    	//$data_result_q1 = $this->get_result_q1($q1);

    	echo json_encode($diagnosis_data);
    }

    public function doDiagnose($q1){
    	$test_data =  $this->dataModel->getDiagnosis_testing($q1);

    	return $test_data;
    }

	public function test_alg($check_counter){
        $i=0;$x=0;
        $q1=0;$q2=0;$q3=0;$q4=0;$q5=0;
        $data_temp=[];
        $data_output=[];
        $data_diagnosa;
        $new_data=[];
        $length_data=[];$as=0;

        /*
        
        switch ($check_counter) {
            case 1:
                $q1=$this->input->post('q1');
                $q2=0;
                $q3=0;
                $q4=0;
                $q5=0;
                
                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 2:

	            $q1=$this->input->post('q1');
	            $q2=$this->input->post('q2');
	            $q3=0;
	            $q4=0;
	            $q5=0;

                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 3:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');
                $q4=0;
                $q5=0;

                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 4:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');
                $q4=$this->input->post('q4');
                $q5=0;

                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 5:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');
                $q4=$this->input->post('q4');
                $q5=$this->input->post('q5');

                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            
        }

        */
        /*
        switch ($check_counter) {
            case 1:
                $q1=$this->input->post('q1');

                
                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 2:

	            $q1=$this->input->post('q1');
	            $q2=$this->input->post('q2');


                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 3:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');


                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 4:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');
                $q4=$this->input->post('q4');


                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            case 5:

                $q1=$this->input->post('q1');
                $q2=$this->input->post('q2');
                $q3=$this->input->post('q3');
                $q4=$this->input->post('q4');
                $q5=$this->input->post('q5');

                $data = $this->dataModel->getDiagnosis_byTriggerTest($check_counter,$q1,$q2,$q3,$q4,$q5);
                echo json_encode($data);
                break;
            
        }
        */

      //  echo json_encode($data);

        //$data_diagnosa = $this->dataModel->getDiagnosis_byTriggerTest($data);

        //echo json_encode($data_diagnosa);
        /*
         foreach($data as $index => $value){
            //$new_data=array($index => $value);//echo 'index'.$index;

            
            
            //$data_diagnosa = $this->dataModel->getDiagnosis_byTrigger($data);
            //$length_data[$x]=count($data_diagnosa);//echo '(index-> '.$index.'||count : '.$length_data[$x].')';//$x++;
            $data_diagnosa = $this->dataModel->getDiagnosis_byTriggerTest($data);
            foreach($data_diagnosa as $data_row){
            
				echo json_encode($data_row);	

            }
            
        }

*/

       // $this->dataModel->getDiagnosis_byTriggerTest($data); 
    }
}