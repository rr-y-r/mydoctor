<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (!$this->session->userdata('is_logged_in')) 
        {
            $this->session->sess_destroy();
            redirect('login');
        }

        $this->load->model('userModel');
        $this->load->model('dataModel');
    }

    public function index(){

        $gejala = $this->dataModel->getDataGejala_all();
        $gejala_count = count($this->dataModel->getDataGejala_all());
        $diagnosis = $this->dataModel->getDataDiagnosis_all();
        $rData = $this->dataModel->get_rdata();
        $rData_count = count($rData);
        $diagnosis_count = count($diagnosis);


        $this->load->view('dashboard',array(
                'gejala' => $gejala,
                'diagnosis' => $diagnosis,
                'jumlah_gejala' => $gejala_count,
                'jumlah_diagnosis' => $diagnosis_count,
                'jumlah_rdata' => $rData_count
            ));
    }

    public function hasil_diagnosis(){

        $diagnosis = $this->dataModel->getDataDiagnosis_all();
        $gejala = $this->dataModel->getDataGejala_all();
        $rData = $this->dataModel->get_rdata();

        $this->load->view('dashboard-hasil',array(
                'diagnosis' => $diagnosis,
                'gejala' => $gejala,
                'rdata' => $rData
            ));
    }
    
    public function Diagnosis()
    {  

        $data = array();
        $id_result = array();
        $id_diagnosis = array();
        $q1 = array();
            $q2 = array();
            $q3 = array();
            $q4 = array();
            $q5 = array();
        $rdata = $this->dataModel->get_rdata();
        $diagnosis = $this->dataModel->getDataDiagnosis_all();
        $gejala = $this->dataModel->getDataGejala_all();
       // $d_data = $this->dataModel->getDataDiagnosis_all();
        //$g_data =  $this->dataModel->getDataGejala_all();
        
        
        foreach($rdata as $id_q => $row_id){
            foreach($row_id as $column_id => $value_id){
                if($column_id == 'id_result'){
                    $id_result[] = $value_id;

                }
                if($column_id == 'id_diagnosis'){
                    //$data[] = array($column_id=>$this->dataModel->get_diagnosisByID($value_id));
                    $id_diagnosis[] = $this->dataModel->get_diagnosisByID($value_id);

                }
                if($column_id == 'q1'){
                    //$data[] = array($column_id=> $this->dataModel->get_gejalaByID($value_id));
                    $q1[] = $this->dataModel->get_gejalaByID($value_id);

                }
                if($column_id == 'q2'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $q2[] = $this->dataModel->get_gejalaByID($value_id);

                }
                if($column_id == 'q3'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $q3[] = $this->dataModel->get_gejalaByID($value_id);

                }
                if($column_id == 'q4'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $q4[] = $this->dataModel->get_gejalaByID($value_id);

                }
                if($column_id == 'q5'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $q5[] = $this->dataModel->get_gejalaByID($value_id);

                }
                
            }
            
        }
        
        //echo json_encode(array('data_rdat'=>$data));
        
        $this->load->view('dashboard-diagnosis',array(
            'id_result'=>$id_result,
            'id_diagnosis'=>$id_diagnosis,
            'data_diagnosis'=>$diagnosis,
            'data_gejala' => $gejala,
            'q1'=>$q1,
            'q2'=>$q2,
            'q3'=>$q3,
            'q4'=>$q4,
            'q5'=>$q5
            ));

    }

    function gejala(){
        $gejala = $this->dataModel->getDataGejala_all();

        $this->load->view('dashboard-gejala', array(
                'gejala' => $gejala

            ));
    }
    
    function initial_data(){
       $id=0;$id_d=0;$q1=0;$q2=0;$q3=0;$q4=0;$q5=0;
        $data = array();
        $new_data = array();
        
        $rdata = $this->dataModel->get_rdata();
       // $d_data = $this->dataModel->getDataDiagnosis_all();
        //$g_data =  $this->dataModel->getDataGejala_all();
        
        
        foreach($rdata as $id_q => $row_id){
            foreach($row_id as $column_id => $value_id){
                if($column_id == 'id_result'){
                    $data[$id][$column_id] = $value_id;
                    
                }
                if($column_id == 'id_diagnosis'){
                    //$data[] = array($column_id=>$this->dataModel->get_diagnosisByID($value_id));
                    $data[$id][$column_id] = $this->dataModel->get_diagnosisByID($value_id);
                    //$id_d++;
                }
                if($column_id == 'q1'){
                    //$data[] = array($column_id=> $this->dataModel->get_gejalaByID($value_id));
                    $data[$id][$column_id] = $this->dataModel->get_gejalaByID($value_id);
                    //$q1++;
                }
                if($column_id == 'q2'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $data[$id][$column_id] = $this->dataModel->get_gejalaByID($value_id);
                    //$q2++;
                }
                if($column_id == 'q3'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $data[][$column_id] = $this->dataModel->get_gejalaByID($value_id);
                    //$q3++;
                }
                if($column_id == 'q4'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $data[$id][$column_id] = $this->dataModel->get_gejalaByID($value_id);
                    //$q4++;
                }
                if($column_id == 'q5'){
                    //$data[] = array($column_id=>$this->dataModel->get_gejalaByID($value_id));
                    $data[$id][$column_id] = $this->dataModel->get_gejalaByID($value_id);
                    //$q5++;
                }
                $id++;
            }
            
        }
        
        echo json_encode(array('data_r'=>array('data_rdat'=>$data)));
        //echo json_encode(array('data_rdat'=>$new_data));
    }

    function tambah_diagnosis(){
        sleep(2);
        
        
        $data_diagnosis = array(
                'diagnosis' => $this->input->post('diagnosis'), 
                'deskripsi' => $this->input->post('deskripsi'),
                'bobot' =>0, 
                'tindak_awal' => $this->input->post('tindak_awal'), 
                'tindak_lanjut' => $this->input->post('tindak_lanjut'), 
                'ket_tambahan' => $this->input->post('ket_tambahan')
            );


        //$message = $this->dataModel->get_last_diagnosis();
        //$this->dataModel->get_last_diagnosis();



        if($this->dataModel->insert_diagnosis($data_diagnosis)){
            $data_relasi = array(
                'id_diagnosis' => $this->dataModel->get_last_diagnosis(),
                'q1' => $this->input->post('q1'),
                'q2' => $this->input->post('q2'),
                'q3' => $this->input->post('q3'),
                'q4' => $this->input->post('q4'),
                'q5' => $this->input->post('q5')
            );
            if($this->dataModel->insert_rdata($data_relasi)){
                $message = 'Data diagnosis baru berhasil ditambahkan';
                echo $this->json_response(TRUE, $message); 
            }else{
                $message = 'Oops, ada yang salah dengan data yang akan ditambahkan, silahkan periksa kembali';
                echo $this->json_response(FALSE, $message); 
            }
        }else{
            $message = 'Oops, ada yang salah dengan data yang akan ditambahkan, silahkan periksa kembali';
            echo $this->json_response(FALSE, $message); 
        }
    }

    function edit_diagnosis(){
        sleep(2);
        
        
        $data_diagnosis = array(
                'diagnosis' => $this->input->post('diagnosis_edit'), 
                'deskripsi' => $this->input->post('deskripsi_edit'),
                'bobot' =>0, 
                'tindak_awal' => $this->input->post('tindak_awal_edit'), 
                'tindak_lanjut' => $this->input->post('tindak_lanjut_edit'), 
                'ket_tambahan' => $this->input->post('ket_tambahan_edit')
            );

        $id_diagnosis = $this->input->post('id_diagnosis');

        //$this->dataModel->get_last_diagnosis();


        
        if($this->dataModel->update_diagnosis($data_diagnosis,$id_diagnosis)){
            $data_relasi = array(
                'q1' => $this->input->post('q1'),
                'q2' => $this->input->post('q2'),
                'q3' => $this->input->post('q3'),
                'q4' => $this->input->post('q4'),
                'q5' => $this->input->post('q5')
            );
            if($this->dataModel->update_rdata($data_relasi,$id_diagnosis)){
                $message = 'Data diagnosis berhasil di ubah';
                echo $this->json_response(TRUE, $message); 
            }else{
                $message = 'Oops, ada yang salah dengan data yang akan diubah, silahkan periksa kembali';
                echo $this->json_response(FALSE, $message); 
            }
        }else{
            $message = 'Oops, ada yang salah dengan data yang akan diubah, silahkan periksa kembali';
            echo $this->json_response(FALSE, $message); 
        }
        
    }

    function delete_diagnosis($id){
        echo $this->dataModel->delete_diagnosis($id);
    }

    function tambah_gejala(){
        $data = array(
            'gejala' => $this->input->post('gejala'),
            'bobot' => 0
            );

        if($this->dataModel->insert_gejala($data)){
            $message = 'Data Gejala baru berhasil ditambahkan';
            echo $this->json_response(TRUE, $message); 
        }else{
            $message = 'Oops, ada yang salah dengan data yang akan ditambahkan, silahkan periksa kembali';
            echo $this->json_response(FALSE, $message); 
        }

    }

    function edit_gejala($id){
        $id_gejala = $id;
        $data = array(
            'gejala' => $this->input->post('gejala_edit'),
            'bobot' => 0
            );

        if($this->dataModel->update_gejala($data, $id)){
            $message = 'Data Gejala baru berhasil ditambahkan';
            echo $this->json_response(TRUE, $message); 
        }else{
            $message = 'Oops, ada yang salah dengan data yang akan ditambahkan, silahkan periksa kembali';
            echo $this->json_response(FALSE, $message); 
        }
    }

    function log_diagnosis(){
        $log = $this->dataModel->getLog_all();

        $this->load->view('dashboard-log', array(
                'log' => $log

            ));
    }

    function query_test(){
        echo $this->dataModel->get_last_diagnosis();
    }
    
    function get_rdata(){
        $rdata = $this->dataModel->get_rdata();
        echo json_encode(array('data_rdat'=>$rdata));
    }
    
    function get_gejalaByID($id){
        echo $this->dataModel->get_gejalaByID($id);
    }

    function get_gejalaData(){
        echo json_encode($this->dataModel->getDataGejala_all());
    }

    
        
    function get_diagnosisByID($id){
        echo $this->dataModel->get_diagnosisByID($id);
    }
    
    function get_data_diagnosa()
    {
        $d_data = $this->dataModel->getDataDiagnosis_all();
        echo json_encode($d_data);
    }

    private function json_response($successful, $message){
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }
    
}