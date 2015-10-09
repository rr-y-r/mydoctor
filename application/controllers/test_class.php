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
    public function getDiagData(){
    	$q1=$this->input->post('q1');
    	$q2=$this->input->post('q2');
    	$q3=$this->input->post('q3');
    	$q4=$this->input->post('q4');
    	$q5=$this->input->post('q5');

		 



    	if($q1!=null){
    		 $diag_dataset = array_column($this->dataModel->getDiagnosis_testing($q1),'q1');
    		 echo json_encode($diag_dataset);
    	}
    	if($q2!=null){
    		$this->diag_data['q2'] = $q2;
    	}
    	if($q3!=null){
    		$this->diag_data['q3'] = $q3;
    	}
    	if($q4!=null){
    		$this->diag_data['q4'] = $q4;
    	}
    	if($q5!=null){
    		$this->diag_data['q5'] = $q5;
    	}
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