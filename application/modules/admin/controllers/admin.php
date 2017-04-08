<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends MX_Controller {
 
    public function __construct()
    {

          parent::__construct();
          $this->load->model('admin/Madmin');
    }
    public function index(){
        $data['contentview'] = "content/index/dashboard";
        $this->load->view("html/dashboard",$data);
    }
    public function test(){
        $this->Madmin->returnQuery();
        echo $this->session->userdata('last_query');
        //$data['contentview'] = "content/form/profilpegawai";
        //$this->load->view('html/dashboard',$data);
    }
    public function not_found(){
        $data['contentview'] = "content/404/404";
        $this->load->view('html/dashboard',$data);
    }
    public function input($mode = "view", $form = "404", $dataKondisi = 0){
        if($mode=='create'){
            $data['valuetext'] = "";
            $data['id'] = $dataKondisi;
            $data['textButton'] = "SAVE";
            $data['action'] = base_url('index.php/admin/save');
            $data['mode'] = 'create';

            switch ($form) {
                case 'bagian':
                    $data['contentview'] = "content/form/bagian";
                    $data['data'] = $this->Madmin->get('master_bagian');
                    break;
                case 'golongan':
                    $data['contentview'] = "content/form/golongan";
                    $data['data'] = $this->Madmin->get('master_gol');
                    break;
                case 'hukuman':
                    $data['contentview'] = "content/form/hukuman";
                    $data['data'] = $this->Madmin->get('master_hukuman');
                    break;
                case 'jabatan':
                    $data['contentview'] = "content/form/jabatan";
                    $data['data'] = $this->Madmin->get('master_jabatan');
                    break;
                case 'potongan':
                    $data['contentview'] = "content/form/potongan";
                    $data['data'] = $this->Madmin->get('master_potongan');
                    break;
                case 'tunjangan':
                    $data['contentview'] = "content/form/tunjangan_jabatan";
                    $data['data'] = $this->Madmin->get('master_tunj_jabatan');
                    break;
                case 'tunjangan':
                    $data['contentview'] = "content/form/tunjangan_jabatan";
                    $data['data'] = $this->Madmin->get('master_tunj_jabatan');
                    break;
                case 'unitkerja':
                    $data['contentview'] = "content/form/unit_kerja";
                    $data['namaunitkerja'] = "";
                    $data['unitsatuan'] = "";
                    $data['textButton'] = "SAVE";
                    $data['data'] = $this->Madmin->get('master_unit_kerja');
                    break;
                case 'statuskepegawaian':
                    $data['contentview'] = "content/form/status_kepegawaian";
                    $data['data'] = $this->Madmin->get('master_status_pegawai');
                    break;
                case 'tanggungan':
                    $data['contentview'] = "content/form/tanggungan";
                    $data['data'] = $this->Madmin->get('master_tanggungan');
                    break;
                case 'pegawai' :
                    $data['valuenip'] = "";
                    $data['valuenama'] = "";
                    $data['valuetempatlahir'] = "";
                    $data['valuetanggallahir'] = "";
                    $data['valuejeniskelamin'] = "";
                    $data['valueagama'] = "";
                    $data['valuealamatskrg'] = "";
                    $data['valuealamatktp'] = "";
                    $data['valuenoktp'] = "";
                    $data['valuestatuspegawai'] = "";
                    $data['valuenpwp'] = "";
                    $data['valuegolongan'] = "";
                    $data['valuejabatan'] = "";
                    $data['valueunitkerja'] = "";
                    $data['valuebagian'] = "";
                    $data['valuestatuskawin'] = "";
                    $data['valuegapok'] = "";
                    $data['valuefoto'] = "";
                    $data['valuestatus'] = "";
                    $data['valuestatusnikah'] = "";
                    $data['valuetanggalterdaftar'] = "";
                    $data['valueskterdaftar'] = "";
                    $data['valuestmttetap'] = "";
                    $data['valuessktetap'] = "";
                    $data['valuesnorek'] = "";
                    $data['valuesnoastek'] = "";
                    $data['valuesnoaspek'] = "";
                    $data['contentview'] = "content/form/pegawai";
                    $data['data'] = $this->getDataPegawai();
                    break;
                default:
                    $data['contentview'] = "content/404/404";
                    break;
            }
        }elseif ($mode=="update") {
            $data['id'] = $dataKondisi;
            $data['textButton'] = "EDIT";
            $data['action'] = base_url('index.php/admin/save');
            $data['mode'] = 'update';
            switch ($form) {
                case 'bagian':
                    $data['contentview'] = "content/form/bagian";
                    $dataSelect = array(
                            "id_bagian" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_bagian",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_bagian;
                    $data['data'] = $this->Madmin->get('master_bagian');
                    break;
                case 'golongan':
                    $dataSelect = array(
                            "id_golongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_gol",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_golongan;
                    $data['contentview'] = "content/form/golongan";
                    $data['data'] = $this->Madmin->get('master_gol');
                    break;
                case 'hukuman':
                    $dataSelect = array(
                            "id_hukuman" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_hukuman",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_hukuman;
                    $data['contentview'] = "content/form/hukuman";
                    $data['data'] = $this->Madmin->get('master_hukuman');
                    break;
                case 'jabatan':
                    $dataSelect = array(
                            "id_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_jabatan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_jabatan;
                    $data['contentview'] = "content/form/jabatan";
                    $data['data'] = $this->Madmin->get('master_jabatan');
                    break;
                case 'potongan':
                    $dataSelect = array(
                            "id_potongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_potongan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_potongan;
                    $data['contentview'] = "content/form/potongan";
                    $data['data'] = $this->Madmin->get('master_potongan');
                    break;
                case 'tunjangan':
                    $dataSelect = array(
                            "id_tunj_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_tunj_jabatan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_tunj_jabatan;
                    $data['contentview'] = "content/form/tunjangan_jabatan";
                    $data['data'] = $this->Madmin->get('master_tunj_jabatan');
                    break;
                case 'unitkerja':
                    $dataSelect = array(
                            "id_unit_kerja" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_unit_kerja",$dataSelect);
                    $data['namaunitkerja'] = $getData->row()->nama_unit_kerja;
                    $data['unitsatuan'] = $getData->row()->unit_satuan;
                    $data['contentview'] = "content/form/unit_kerja";
                    $data['data'] = $this->Madmin->get('master_unit_kerja');
                    break;
                case 'statuskepegawaian':
                    $dataSelect = array(
                            "id_status_pegawai" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_status_pegawai",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_status;
                    $data['contentview'] = "content/form/status_kepegawaian";
                    $data['data'] = $this->Madmin->get('master_status_pegawai');
                    break;
                case 'tanggungan':
                    $dataSelect = array(
                            "id_tanggungan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_tanggungan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_tanggungan;
                    $data['contentview'] = "content/form/tanggungan";
                    $data['data'] = $this->Madmin->get('master_tanggungan');
                    break;
                case 'pegawai':
                    $dataSelect = array(
                            "id_pegawai" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_pegawai",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuenama'] = $getData->row()->nama_pegawai;
                    $data['valuetempatlahir'] = $getData->row()->tempat_lahir;
                    $data['valuetanggallahir'] = $this->convertDate($getData->row()->tanggal_lahir,"mysql");
                    $data['valuejeniskelamin'] = $getData->row()->jenis_kelamin;
                    $data['valueagama'] = $getData->row()->agama;
                    $data['valuealamatskrg'] = $getData->row()->alamat_skrg;
                    $data['valuealamatktp'] = $getData->row()->alamat_ktp;
                    $data['valuenoktp'] = $getData->row()->no_ktp;
                    $data['valuestatuspegawai'] = $getData->row()->id_status_pegawai;
                    $data['valuenpwp'] = $getData->row()->no_npwp;
                    $data['valuegolongan'] = $getData->row()->id_golongan;
                    $data['valuejabatan'] = $getData->row()->id_jabatan;
                    $data['valueunitkerja'] = $getData->row()->id_unit_kerja;
                    $data['valuebagian'] = $getData->row()->id_bagian;
                    $data['valuestatuskawin'] = $getData->row()->status_perkawinan;
                    $data['valuegapok'] = $getData->row()->gapok;
                    $data['valuefoto'] = $getData->row()->foto;
                    $data['valuestatus'] = $getData->row()->status;
                    $data['valuestatusnikah'] = $getData->row()->statusnikah;
                    $data['valuetanggalterdaftar'] = $this->convertDate($getData->row()->tglterdaftar);
                    $data['valueskterdaftar'] = $getData->row()->skterdaftar;
                    $data['valuestmttetap'] = $this->convertDate($getData->row()->tmttetap);
                    $data['valuessktetap'] = $getData->row()->sktetap;
                    $data['valuesnorek'] = $getData->row()->norekening;
                    $data['valuesnoastek'] = $getData->row()->noastek;
                    $data['valuesnoaspek'] = $getData->row()->noaspen;
                    $data['contentview'] = "content/form/pegawai";
                    $data['data'] = $this->getDataPegawai();
                    break;
                default:
                    $data['contentview'] = "content/404/404";
                    break;
            }
        }elseif ($mode=="delete") {
            $data['id'] = $dataKondisi;
            $data['textButton'] = "HAPUS";
            $data['action'] = base_url('index.php/admin/save');
            $data['mode'] = 'delete';
            switch ($form) {
                case 'bagian':
                    $dataSelect = array(
                            "id_bagian" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_bagian",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_bagian;
                    $data['contentview'] = "content/form/bagian";
                    $data['data'] = $this->Madmin->get('master_bagian');
                break;
                case 'golongan':
                    $dataSelect = array(
                            "id_golongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_gol",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_golongan;
                    $data['contentview'] = "content/form/golongan";
                    $data['data'] = $this->Madmin->get('master_gol');
                    break;
                case 'hukuman':
                    $dataSelect = array(
                            "id_hukuman" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_hukuman",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_hukuman;
                    $data['contentview'] = "content/form/hukuman";
                    $data['data'] = $this->Madmin->get('master_hukuman');
                    break;
                case 'jabatan':
                    $dataSelect = array(
                            "id_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_jabatan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_jabatan;
                    $data['contentview'] = "content/form/jabatan";
                    $data['data'] = $this->Madmin->get('master_jabatan');
                    break;
                case 'potongan':
                    $dataSelect = array(
                            "id_potongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_potongan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_potongan;
                    $data['contentview'] = "content/form/potongan";
                    $data['data'] = $this->Madmin->get('master_potongan');
                    break;
                case 'tunjangan':
                    $dataSelect = array(
                            "id_tunj_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_tunj_jabatan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_tunj_jabatan;
                    $data['contentview'] = "content/form/tunjangan_jabatan";
                    $data['data'] = $this->Madmin->get('master_tunj_jabatan');
                    break;
                case 'unitkerja':
                    $dataSelect = array(
                            "id_unit_kerja" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_unit_kerja",$dataSelect);
                    $data['namaunitkerja'] = $getData->row()->nama_unit_kerja;
                    $data['unitsatuan'] = $getData->row()->unit_satuan;
                    $data['contentview'] = "content/form/unit_kerja";
                    $data['data'] = $this->Madmin->get('master_unit_kerja');
                    break;
                case 'statuskepegawaian':
                    $dataSelect = array(
                            "id_status_pegawai" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_status_pegawai",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_status;
                    $data['contentview'] = "content/form/status_kepegawaian";
                    $data['data'] = $this->Madmin->get('master_status_pegawai');
                    break;
                case 'tanggungan':
                    $dataSelect = array(
                            "id_tanggungan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_tanggungan",$dataSelect);
                    $data['valuetext'] = $getData->row()->nama_tanggungan;
                    $data['contentview'] = "content/form/tanggungan";
                    $data['data'] = $this->Madmin->get('master_tanggungan');
                    break;
                case 'pegawai':
                    $dataSelect = array(
                            "id_pegawai" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("master_pegawai",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuenama'] = $getData->row()->nama_pegawai;
                    $data['valuetempatlahir'] = $getData->row()->tempat_lahir;
                    $data['valuetanggallahir'] = $this->convertDate($getData->row()->tanggal_lahir,"mysql");
                    $data['valuejeniskelamin'] = $getData->row()->jenis_kelamin;
                    $data['valueagama'] = $getData->row()->agama;
                    $data['valuealamatskrg'] = $getData->row()->alamat_skrg;
                    $data['valuealamatktp'] = $getData->row()->alamat_ktp;
                    $data['valuenoktp'] = $getData->row()->no_ktp;
                    $data['valuestatuspegawai'] = $getData->row()->id_status_pegawai;
                    $data['valuenpwp'] = $getData->row()->no_npwp;
                    $data['valuegolongan'] = $getData->row()->id_golongan;
                    $data['valuejabatan'] = $getData->row()->id_jabatan;
                    $data['valueunitkerja'] = $getData->row()->id_unit_kerja;
                    $data['valuebagian'] = $getData->row()->id_bagian;
                    $data['valuestatuskawin'] = $getData->row()->status_perkawinan;
                    $data['valuegapok'] = $getData->row()->gapok;
                    $data['valuefoto'] = $getData->row()->foto;
                    $data['valuestatus'] = $getData->row()->status;
                    $data['valuestatusnikah'] = $getData->row()->statusnikah;
                    $data['valuetanggalterdaftar'] = $this->convertDate($getData->row()->tglterdaftar);
                    $data['valueskterdaftar'] = $getData->row()->skterdaftar;
                    $data['valuestmttetap'] = $this->convertDate($getData->row()->tmttetap);
                    $data['valuessktetap'] = $getData->row()->sktetap;
                    $data['valuesnorek'] = $getData->row()->norekening;
                    $data['valuesnoastek'] = $getData->row()->noastek;
                    $data['valuesnoaspek'] = $getData->row()->noaspen;
                    $data['contentview'] = "content/form/pegawai";
                    $data['data'] = $this->getDataPegawai();
                    break;
                default:
                    $data['contentview'] = "content/404/404";
                    break;
            }
        }
        $this->load->view('html/dashboard',$data);
    }
    public function save(){
        $params = $this->input->post();
        if($params['mode'] == 'create'){
            switch ($params['nameform']) {
                case 'bagian':
                    $data = array(
                            'nama_bagian' => $params['nama-bagian']
                        );
                    $query = $this->Madmin->insert('master_bagian',$data);
                    $redirect = base_url('index.php/admin/input/create/bagian');
                    break;
                case 'golongan':
                    $data = array(
                            'nama_golongan' => $params['nama-golongan']
                        );
                    $query = $this->Madmin->insert('master_gol',$data);
                    $redirect = base_url('index.php/admin/input/create/golongan');
                    break;
                case 'hukuman':
                    $data = array(
                            'nama_hukuman' => $params['nama-hukuman']
                        );
                    $query = $this->Madmin->insert('master_hukuman',$data);
                    $redirect = base_url('index.php/admin/input/create/hukuman');
                    break;
                case 'jabatan':
                    $data = array(
                            'nama_jabatan' => $params['nama-jabatan']
                        );
                    $query = $this->Madmin->insert('master_jabatan',$data);
                    $redirect = base_url('index.php/admin/input/create/jabatan');
                    break;
                case 'potongan':
                    $data = array(
                            'nama_potongan' => $params['nama-potongan']
                        );
                    $query = $this->Madmin->insert('master_potongan',$data);
                    $redirect = base_url('index.php/admin/input/create/potongan');
                    break;
                case 'tunjangan':
                    $data = array(
                            'nama_tunj_jabatan' => $params['nama-tunj-jabatan']
                        );
                    $query = $this->Madmin->insert('master_tunj_jabatan',$data);
                    $redirect = base_url('index.php/admin/input/create/tunjangan');
                    break;
                case 'unitkerja':
                    $data = array(
                            'nama_unit_kerja' => $params['unit-kerja'],
                            'unit_satuan' => $params['unit-satuan']
                        );
                    $query = $this->Madmin->insert('master_unit_kerja',$data);
                    $redirect = base_url('index.php/admin/input/create/unitkerja');
                    break;
                case 'statuskepegawaian':
                    $data = array(
                            'nama_status' => $params['nama-status-kepegawaian']
                        );
                    $query = $this->Madmin->insert('master_status_pegawai',$data);
                    $redirect = base_url('index.php/admin/input/create/statuskepegawaian');
                    break;
                case 'tanggungan':
                    $data = array(
                            'nama_tanggungan' => $params['nama-tanggungan']
                        );
                    $query = $this->Madmin->insert('master_tanggungan',$data);
                    $redirect = base_url('index.php/admin/input/create/tanggungan');
                    break;
                case 'pegawai':
                    if($_FILES['filefoto']){
                        $target_path = 'assets/foto/';
                        $target_path = $target_path . basename( $_FILES['filefoto'][$params['nip']]); 
                        if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {

                        }
                    }
                    $data = array(
                            'nip' => $params['nip'],
                            'nama_pegawai' => $params['nama'],
                            'tempat_lahir' => $params['tempat-lahir'],
                            'tanggal_lahir' => $this->convertDate($params['tanggal-lahir'],"php"),
                            'jenis_kelamin' => $params['jenis-kelamin'],
                            'agama' => $params['agama'],
                            'alamat_skrg' => $params['alamat-sekarang'],
                            'alamat_ktp' => $params['alamat-ktp'],
                            'no_ktp' => $params['no-ktp'],
                            'id_status_pegawai' => $params['status-kepegawaian'],
                            'no_npwp' => $params['no-npwp'],
                            'id_golongan' => $params['golongan'],
                            'id_jabatan' => $params['jabatan'],
                            'id_unit_kerja' => $params['unit-kerja'],
                            'id_bagian' => $params['bagian'],
                            'status_perkawinan' => $params['status-kawin'],
                            'statusnikah' => $params['status-nikah'],
                            'tglterdaftar' => $this->convertDate($params['tanggal-terdaftar'],'php'),
                            'skterdaftar' => $params['sk-terdaftar'],
                            'tmttetap' => $this->convertDate($params['tmt-tetap'],'php'),
                            'sktetap' => $params['sk-tetap'],
                            'tglpensiun' => $this->tanggalPensiun($params['tanggal-lahir']),
                            'norekening' => $params['no-rekening'],
                            'noastek' => $params['no-astek'],
                            'noaspen' => $params['no-aspek'],
                            'gapok' => $params['gaji-pokok'],
                            'foto' => $_FILES['filefoto']['name'],
                            'status' => $params['status']
                        );
                    $query = $this->Madmin->insert('master_pegawai',$data);
                    $redirect = base_url('index.php/admin/input/create/pegawai');
                    break;
                default:
                $query =  "";
                    $redirect = 'index';
                    break;
            }
        }elseif($params['mode'] == "update"){
            switch ($params['nameform']) {
                case 'bagian':
                    $table = "master_bagian";
                    $kondisi = array(
                            'id_bagian' => $params['id']
                        );
                    $data = array(
                            'nama_bagian' => $params['nama-bagian']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/bagian');
                    break;
                case 'golongan':
                    $table = "master_gol";
                    $kondisi = array(
                            'id_golongan' => $params['id']
                        );
                    $data = array(
                            'nama_golongan' => $params['nama-golongan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/golongan');
                    break;
                case 'hukuman':
                    $table = "master_hukuman";
                    $kondisi = array(
                            'id_hukuman' => $params['id']
                        );
                    $data = array(
                            'nama_hukuman' => $params['nama-hukuman']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/hukuman');
                    break;
                case 'jabatan':
                    $table = "master_jabatan";
                    $kondisi = array(
                            'id_jabatan' => $params['id']
                        );
                    $data = array(
                            'nama_jabatan' => $params['nama-jabatan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/jabatan');
                    break;
                case 'potongan':
                    $table = "master_potongan";
                    $kondisi = array(
                            'id_potongan' => $params['id']
                        );
                    $data = array(
                            'nama_potongan' => $params['nama-potongan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/potongan');
                    break;
                case 'tunjangan':
                    $table = "master_tunj_jabatan";
                    $kondisi = array(
                            'id_tunj_jabatan' => $params['id']
                        );
                    $data = array(
                            'nama_tunj_jabatan' => $params['nama-tunj-jabatan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/tunjangan');
                    break;
                case 'unitkerja':
                    $table = "master_unit_kerja";
                    $kondisi = array(
                            'id_unit_kerja' => $params['id']
                        );
                    $data = array(
                            'nama_unit_kerja' => $params['unit-kerja'],
                            'unit_satuan' => $params['unit-satuan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/unitkerja');
                    break;
                case 'statuskepegawaian':
                    $table = "master_status_pegawai";
                    $kondisi = array(
                            'id_status_pegawai' => $params['id']
                        );
                    $data = array(
                            'nama_status' => $params['nama-status-kepegawaian']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/statuskepegawaian');
                    break;
                case 'tanggungan':
                    $table = "master_tanggungan";
                    $kondisi = array(
                            'id_tanggungan' => $params['id']
                        );
                    $data = array(
                            'nama_tanggungan' => $params['nama-tanggungan']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/tanggungan');
                    break;
                case 'pegawai':
                    if($_FILES['filefoto']){
                        $target_path = 'assets/foto/';
                        $target_path = $target_path . basename( $_FILES['filefoto']['name']);
                        if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {
                            
                        }
                    }
                    $table = "master_pegawai";
                    $kondisi = array(
                            'id_pegawai' => $params['id']
                        );
                    $data = array(
                            'nip' => $params['nip'],
                            'nama_pegawai' => $params['nama'],
                            'tempat_lahir' => $params['tempat-lahir'],
                            'tanggal_lahir' => $this->convertDate($params['tanggal-lahir'],"php"),
                            'jenis_kelamin' => $params['jenis-kelamin'],
                            'agama' => $params['agama'],
                            'alamat_skrg' => $params['alamat-sekarang'],
                            'alamat_ktp' => $params['alamat-ktp'],
                            'no_ktp' => $params['no-ktp'],
                            'id_status_pegawai' => $params['status-kepegawaian'],
                            'no_npwp' => $params['no-npwp'],
                            'id_golongan' => $params['golongan'],
                            'id_jabatan' => $params['jabatan'],
                            'id_unit_kerja' => $params['unit-kerja'],
                            'id_bagian' => $params['bagian'],
                            'status_perkawinan' => $params['status-kawin'],
                            'statusnikah' => $params['status-nikah'],
                            'tglterdaftar' => $this->convertDate($params['tanggal-terdaftar'],'php'),
                            'skterdaftar' => $params['sk-terdaftar'],
                            'tmttetap' => $this->convertDate($params['tmt-tetap'],'php'),
                            'sktetap' => $params['sk-tetap'],
                            'tglpensiun' => $this->tanggalPensiun($params['tanggal-lahir']),
                            'norekening' => $params['no-rekening'],
                            'noastek' => $params['no-astek'],
                            'noaspen' => $params['no-aspek'],
                            'gapok' => $params['gaji-pokok'],
                            'foto' => $_FILES['filefoto']['name'],
                            'status' => $params['status']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/input/create/pegawai');
                    break;
                default:
                    $redirect = 'index';
                    break;
            }
        }elseif($params['mode'] == "delete"){
            switch ($params['nameform']) {
                case 'bagian':
                    $table = "master_bagian";
                    $kondisi = array(
                            'id_bagian' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/bagian');
                    break;
                case 'golongan':
                    $table = "master_gol";
                    $kondisi = array(
                            'id_golongan' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/golongan');
                    break;
                case 'hukuman':
                    $table = "master_hukuman";
                    $kondisi = array(
                            'id_hukuman' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/hukuman');
                    break;
                case 'jabatan':
                    $table = "master_jabatan";
                    $kondisi = array(
                            'id_jabatan' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/jabatan');
                    break;
                case 'potongan':
                    $table = "master_potongan";
                    $kondisi = array(
                            'id_potongan' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/potongan');
                    break;
                case 'tunjangan':
                    $table = "master_tunj_jabatan";
                    $kondisi = array(
                            'id_tunj_jabatan' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/tunjangan');
                    break;
                case 'unitkerja':
                    $table = "master_unit_kerja";
                    $kondisi = array(
                            'id_unit_kerja' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/unitkerja');
                    break;
                case 'statuskepegawaian':
                    $table = "master_status_pegawai";
                    $kondisi = array(
                            'id_status_pegawai' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/statuskepegawaian');
                    break;
                case 'tanggungan':
                    $table = "master_tanggungan";
                    $kondisi = array(
                            'id_tanggungan' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/tanggungan');
                    break;
                case 'pegawai':
                    $table = "master_pegawai";
                    $kondisi = array(
                            'id_pegawai' => $params['id']
                        );
                    $query = $this->Madmin->delete($table,$kondisi);
                    $redirect = base_url('index.php/admin/input/create/pegawai');
                    break;
                default:
                    $redirect = 'index';
                    break;
            }
        }
        if($query){
            $StringNotif = "success";
        }else{
            $StringNotif = "error";
        }
        $this->session->set_flashdata('notif_succes',$StringNotif);
        header("location:".$redirect);
    }
    public function getDataPegawai(){
        $StringQuery = "SELECT
                        master_pegawai.* ,
                        master_status_pegawai.*,
                        master_gol.*,
                        master_jabatan.*,
                        master_unit_kerja.*
                        FROM
                        master_pegawai
                        INNER JOIN master_bagian ON master_pegawai.id_bagian = master_bagian.id_bagian
                        INNER JOIN master_gol ON master_pegawai.id_golongan = master_gol.id_golongan
                        INNER JOIN master_jabatan ON master_pegawai.id_jabatan = master_jabatan.id_jabatan
                        INNER JOIN master_status_pegawai ON master_pegawai.id_status_pegawai = master_status_pegawai.id_status_pegawai
                        INNER JOIN master_unit_kerja ON master_pegawai.id_unit_kerja = master_unit_kerja.id_unit_kerja
                        ";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiGolongan(){
        $StringQuery = "SELECT
                        master_pegawai.nama_pegawai,
                        master_gol.nama_golongan,
                        ttgolongan.tgl_sk_gol,
                        ttgolongan.tgl_awal_gol,
                        ttgolongan.tgl_akhir_gol,
                        ttgolongan.keterangan,
                        ttgolongan.id_dt_golongan,
                        ttgolongan.foto1,
                        ttgolongan.foto2,
                        ttgolongan.foto3
                        FROM
                        ttgolongan
                        INNER JOIN master_pegawai ON ttgolongan.nip = master_pegawai.nip
                        INNER JOIN master_gol ON ttgolongan.id_golongan = master_gol.id_golongan
                        ";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiJabatan(){
        $StringQuery = "SELECT
                        master_pegawai.nama_pegawai,
                        master_jabatan.nama_jabatan,
                        ttjabatan.tgl_sk_jabatan,
                        ttjabatan.tgl_awal_jab,
                        ttjabatan.tgl_akhir_jab,
                        ttjabatan.keterangan,
                        ttjabatan.id_dt_jabatan,
                        ttjabatan.foto1,
                        ttjabatan.foto2,
                        ttjabatan.foto3
                        FROM
                        ttjabatan
                        INNER JOIN master_pegawai ON ttjabatan.nip = master_pegawai.nip
                        INNER JOIN master_jabatan ON ttjabatan.id_jabatan = master_jabatan.id_jabatan
                        ";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiKeluarga(){
        $StringQuery = "SELECT
                        ttkeluarga.*,
                        master_pegawai.nama_pegawai
                        FROM
                        ttkeluarga
                        INNER JOIN master_pegawai ON ttkeluarga.nip = master_pegawai.nip
                        ";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiPelatihan(){
        $StringQuery = "SELECT
                        ttpelatihan.id_dt_pelatihan,
                        ttpelatihan.lokasi,
                        ttpelatihan.tgl_mulai_pelatihan,
                        ttpelatihan.tgl_akhir_pelatihan,
                        ttpelatihan.uraian_pelatihan,
                        ttpelatihan.tgl_sertifikat,
                        ttpelatihan.foto,
                        master_pegawai.nama_pegawai
                        FROM
                        ttpelatihan
                        INNER JOIN master_pegawai ON ttpelatihan.nip = master_pegawai.nip";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiPendidikan(){
        $StringQuery = "SELECT
                        ttpendidikan.id_dt_pendidikan,
                        ttpendidikan.nip,
                        master_pegawai.nama_pegawai,
                        ttpendidikan.tingkat_pendidikan,
                        ttpendidikan.jurusan,
                        ttpendidikan.uraian,
                        ttpendidikan.teknik_non_teknik,
                        ttpendidikan.sekolah,
                        ttpendidikan.tempat_sekolah,
                        ttpendidikan.nomor_sttb,
                        ttpendidikan.tanggal_sttb,
                        ttpendidikan.tanggal_lulus,
                        ttpendidikan.foto
                        FROM
                        ttpendidikan
                        INNER JOIN master_pegawai ON ttpendidikan.nip = master_pegawai.nip";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getTransaksiSeminar(){
        $StringQUery = "SELECT
                        ttseminar.id_dt_seminar,
                        ttseminar.nip,
                        ttseminar.lokasi,
                        ttseminar.tgl_mulai_seminar,
                        ttseminar.tgl_akhir_seminar,
                        ttseminar.uraian_seminar,
                        ttseminar.tgl_sertifikat,
                        ttseminar.foto,
                        master_pegawai.nama_pegawai
                        FROM
                        ttseminar
                        INNER JOIN master_pegawai ON ttseminar.nip = master_pegawai.nip";
        $query = $this->Madmin->query($StringQUery);
        return $query;
    }
    public function getTransaksiTeguran(){
        $StringQuery = "SELECT
                        master_pegawai.nama_pegawai,
                        master_hukuman.nama_hukuman,
                        ttteguran.id_dt_teguran,
                        ttteguran.nip,
                        ttteguran.id_hukuman,
                        ttteguran.tgl_surat,
                        ttteguran.perihal,
                        ttteguran.ket_hukuman
                        FROM
                        ttteguran
                        INNER JOIN master_pegawai ON ttteguran.nip = master_pegawai.nip
                        INNER JOIN master_hukuman ON ttteguran.id_hukuman = master_hukuman.id_hukuman";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function getDataMaster($table){
        $query = $this->Madmin->get($table);
        return $query;
    }
    public function transaksi($mode = 'view', $form = '404', $dataKondisi = 0){
        if($mode == 'create'){
            $data['mode'] = 'create';
            $data['id'] = '0';
            $data['textButton'] = 'SAVE';
            $data['action'] = base_url().'admin/SaveTransaksi';
            switch ($form) {
                case 'golongan':
                    $data['form'] = 'golongan';
                    $data['contentview'] = 'admin/content/form/transaksi/golongan';
                    $data['data'] = $this->getTransaksiGolongan();
                    break;
                case 'jabatan':
                    $data['form'] = 'jabatan';
                    $data['contentview'] = 'admin/content/form/transaksi/jabatan';
                    $data['data'] = $this->getTransaksiJabatan();
                    break;
                case 'keluarga':
                    $data['form'] = 'keluarga';
                    $data['contentview'] = 'admin/content/form/transaksi/keluarga';
                    $data['data'] = $this->getTransaksiKeluarga();
                    break;
                case 'pelatihan':
                    $data['form'] = 'pelatihan';
                    $data['contentview'] = 'admin/content/form/transaksi/pelatihan';
                    $data['data'] = $this->getTransaksiPelatihan();
                    break;
                case 'pendidikan':
                    $data['form'] = 'pendidikan';
                    $data['contentview'] = 'admin/content/form/transaksi/pendidikan';
                    $data['data'] = $this->getTransaksiPendidikan();
                    break;
                case 'pph':
                    
                    break;
                case 'seminar':
                    $data['form'] = 'seminar';
                    $data['contentview'] = 'admin/content/form/transaksi/seminar';
                    $data['data'] = $this->getTransaksiSeminar();
                    break;
                case 'teguran':
                    $data['form'] = 'teguran';
                    $data['contentview'] = 'admin/content/form/transaksi/hukuman';
                    $data['data'] = $this->getTransaksiTeguran();
                    break;
                case 'potongan':
                    
                    break;
                default:
                    $data['contentview'] = 'admin/content/404/404';
                    break;
            }
        }elseif($mode == 'update'){
            $data['id'] = $dataKondisi;
            $data['textButton'] = "EDIT";
            $data['action'] = base_url('index.php/admin/SaveTransaksi');
            $data['mode'] = 'update';
            switch ($form) {
                case 'golongan':
                    $data['form'] = "golongan";
                    $data['contentview'] = "content/form/transaksi/golongan";
                    $dataSelect = array(
                            "id_dt_golongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttgolongan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuegol'] = $getData->row()->id_golongan;
                    $data['valuetglsk'] = $this->convertDate($getData->row()->tgl_sk_gol,"mysql");
                    $data['valuetgla'] = $this->convertDate($getData->row()->tgl_awal_gol,"mysql");
                    $data['valuetglb'] = $this->convertDate($getData->row()->tgl_akhir_gol,"mysql");
                    $data['valueket'] = $getData->row()->keterangan;

                    $data['data'] = $this->getTransaksiGolongan();
                    break;
                case 'jabatan':
                    $data['form'] = "jabatan";
                    $data['contentview'] = "content/form/transaksi/jabatan";
                    $dataSelect = array(
                            "id_dt_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttjabatan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuejab'] = $getData->row()->id_jabatan;
                    $data['valuetglsk'] = $this->convertDate($getData->row()->tgl_sk_jabatan,"mysql");
                    $data['valuetgla'] = $this->convertDate($getData->row()->tgl_awal_jab,"mysql");
                    $data['valuetglb'] = $this->convertDate($getData->row()->tgl_akhir_jab,"mysql");
                    $data['valueket'] = $getData->row()->keterangan;

                    $data['data'] = $this->getTransaksiJabatan();
                    break;
                case 'keluarga':
                    $data['form'] = "keluarga";
                    $data['contentview'] = "content/form/transaksi/keluarga";
                    $dataSelect = array(
                            "id_dt_keluarga" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttkeluarga",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuenamaistrisuami'] = $getData->row()->nama_istri_suami;
                    $data['valuetglistrisuami'] = $this->convertDate($getData->row()->tgl_lahir_istri_suami);
                    $data['valuetempatistrisuami'] = $getData->row()->tempat_lahir_istri_suami;
                    $data['valuenamaanak1'] = $getData->row()->anak1;
                    $data['valuetglanak1'] = $this->convertDate($getData->row()->tgl_lahir_anak1);
                    $data['valuependidikananak1'] = $getData->row()->pendidikan_anak1;
                    $data['valuenamanak2'] = $getData->row()->anak2;
                    $data['valuetglanak2'] = $this->convertDate($getData->row()->tgl_lahir_anak2);
                    $data['valuependidikananak2'] = $getData->row()->pendidikan_anak2;
                    $data['valuenamanak3'] = $getData->row()->anak3;
                    $data['valuetglanak3'] = $this->convertDate($getData->row()->tgl_lahir_anak3);
                    $data['valuependidikananak3'] = $getData->row()->pendidikan_anak3;
                    $data['data'] = $this->getTransaksiKeluarga();
                    break;
                case 'pelatihan':
                    $data['form'] = "pelatihan";
                    $data['contentview'] = "content/form/transaksi/pelatihan";
                    $dataSelect = array(
                            "id_dt_pelatihan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttpelatihan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuelokasi'] = $getData->row()->lokasi;
                    $data['valuetglmulai'] = $this->convertDate($getData->row()->tgl_mulai_pelatihan,'mysql');
                    $data['valuetglselesai'] = $this->convertDate($getData->row()->tgl_akhir_pelatihan,'mysql');
                    $data['valueuraian'] = $getData->row()->uraian_pelatihan;
                    $data['valuetglsertifikat'] = $this->convertDate($getData->row()->tgl_sertifikat,'mysql');
                    $data['data'] = $this->getTransaksiPelatihan();
                    break;
                case 'pendidikan':
                    $data['form'] = "pendidikan";
                    $data['contentview'] = "content/form/transaksi/pendidikan";
                    $dataSelect = array(
                            "id_dt_pendidikan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttpendidikan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuetingkatpendidikan'] = $getData->row()->tingkat_pendidikan;
                    $data['valuejurusan'] = $getData->row()->jurusan;
                    $data['valueuraian'] = $getData->row()->uraian;
                    $data['valuetekniknonteknik'] = $getData->row()->teknik_non_teknik;
                    $data['valuesekolah'] = $getData->row()->sekolah;
                    $data['valuetempatsekolah'] = $getData->row()->tempat_sekolah;
                    $data['valuenosttb'] = $getData->row()->nomor_sttb;
                    $data['valuetglsttb'] = $this->convertDate($getData->row()->tanggal_sttb,'mysql');
                    $data['valuetgllulus'] = $this->convertDate($getData->row()->tanggal_lulus,'mysql');
                    $data['data'] = $this->getTransaksiPendidikan();
                    break;
                case 'pph':
                    
                    break;
                case 'seminar':
                    $data['form'] = "seminar";
                    $data['contentview'] = "content/form/transaksi/seminar";
                    $dataSelect = array(
                            "id_dt_seminar" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttseminar",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuelokasi'] = $getData->row()->lokasi;
                    $data['valuetglmulai'] = $this->convertDate($getData->row()->tgl_mulai_seminar,'mysql');
                    $data['valuetglselesai'] = $this->convertDate($getData->row()->tgl_akhir_seminar,'mysql');
                    $data['valueuraian'] = $getData->row()->uraian_seminar;
                    $data['valuetglsertifikat'] = $this->convertDate($getData->row()->tgl_sertifikat,'mysql');
                    $data['data'] = $this->getTransaksiSeminar();
                    break;
                case 'teguran':
                    $data['form'] = "teguran";
                    $data['contentview'] = "content/form/transaksi/hukuman";
                    $dataSelect = array(
                            "id_dt_teguran" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttteguran",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuehukuman'] = $getData->row()->id_hukuman;
                    $data['valuetglsurat'] = $this->convertDate($getData->row()->tgl_surat,'mysql');
                    $data['valueperihal'] = $getData->row()->perihal;
                    $data['valueketeranganhukuman'] = $getData->row()->ket_hukuman;
                    $data['data'] = $this->getTransaksiTeguran();
                    break;
                case 'potongan':
                    
                    break;
                default:
                    $data['contentview'] = 'admin/content/404/404';
                    break;
                }
        }elseif($mode == 'delete'){
            $data['id'] = $dataKondisi;
            $data['textButton'] = "HAPUS";
            $data['action'] = base_url('index.php/admin/SaveTransaksi');
            $data['mode'] = 'delete';
            switch ($form) {
                case 'golongan':
                    $data['form'] = "golongan";
                    $data['contentview'] = "content/form/transaksi/golongan";
                    $dataSelect = array(
                            "id_dt_golongan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttgolongan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuegol'] = $getData->row()->id_golongan;
                    $data['valuetglsk'] = $this->convertDate($getData->row()->tgl_sk_gol,"mysql");
                    $data['valuetgla'] = $this->convertDate($getData->row()->tgl_awal_gol,"mysql");
                    $data['valuetglb'] = $this->convertDate($getData->row()->tgl_akhir_gol,"mysql");
                    $data['valueket'] = $getData->row()->keterangan;

                    $data['data'] = $this->getTransaksiGolongan();
                    break;
                case 'jabatan':
                    $data['form'] = "jabatan";
                    $data['contentview'] = "content/form/transaksi/jabatan";
                    $dataSelect = array(
                            "id_dt_jabatan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttjabatan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuejab'] = $getData->row()->id_jabatan;
                    $data['valuetglsk'] = $this->convertDate($getData->row()->tgl_sk_jabatan,"mysql");
                    $data['valuetgla'] = $this->convertDate($getData->row()->tgl_awal_jab,"mysql");
                    $data['valuetglb'] = $this->convertDate($getData->row()->tgl_akhir_jab,"mysql");
                    $data['valueket'] = $getData->row()->keterangan;

                    $data['data'] = $this->getTransaksiJabatan();
                    break;
                case 'keluarga':
                    $data['form'] = "keluarga";
                    $data['contentview'] = "content/form/transaksi/keluarga";
                    $dataSelect = array(
                            "id_dt_keluarga" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttkeluarga",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuenamaistrisuami'] = $getData->row()->nama_istri_suami;
                    $data['valuetglistrisuami'] = $this->convertDate($getData->row()->tgl_lahir_istri_suami);
                    $data['valuetempatistrisuami'] = $getData->row()->tempat_lahir_istri_suami;
                    $data['valuenamaanak1'] = $getData->row()->anak1;
                    $data['valuetglanak1'] = $this->convertDate($getData->row()->tgl_lahir_anak1);
                    $data['valuependidikananak1'] = $getData->row()->pendidikan_anak1;
                    $data['valuenamanak2'] = $getData->row()->anak2;
                    $data['valuetglanak2'] = $this->convertDate($getData->row()->tgl_lahir_anak2);
                    $data['valuependidikananak2'] = $getData->row()->pendidikan_anak2;
                    $data['valuenamanak3'] = $getData->row()->anak3;
                    $data['valuetglanak3'] = $this->convertDate($getData->row()->tgl_lahir_anak3);
                    $data['valuependidikananak3'] = $getData->row()->pendidikan_anak3;
                    $data['data'] = $this->getTransaksiKeluarga();
                    break;
                case 'pelatihan':
                    $data['form'] = "pelatihan";
                    $data['contentview'] = "content/form/transaksi/pelatihan";
                    $dataSelect = array(
                            "id_dt_pelatihan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttpelatihan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuelokasi'] = $getData->row()->lokasi;
                    $data['valuetglmulai'] = $this->convertDate($getData->row()->tgl_mulai_pelatihan,'mysql');
                    $data['valuetglselesai'] = $this->convertDate($getData->row()->tgl_akhir_pelatihan,'mysql');
                    $data['valueuraian'] = $getData->row()->uraian_pelatihan;
                    $data['valuetglsertifikat'] = $this->convertDate($getData->row()->tgl_sertifikat,'mysql');
                    $data['data'] = $this->getTransaksiPelatihan();
                    break;
                case 'pendidikan':
                    $data['form'] = "pendidikan";
                    $data['contentview'] = "content/form/transaksi/pendidikan";
                    $dataSelect = array(
                            "id_dt_pendidikan" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttpendidikan",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuetingkatpendidikan'] = $getData->row()->tingkat_pendidikan;
                    $data['valuejurusan'] = $getData->row()->jurusan;
                    $data['valueuraian'] = $getData->row()->uraian;
                    $data['valuetekniknonteknik'] = $getData->row()->teknik_non_teknik;
                    $data['valuesekolah'] = $getData->row()->sekolah;
                    $data['valuetempatsekolah'] = $getData->row()->tempat_sekolah;
                    $data['valuenosttb'] = $getData->row()->nomor_sttb;
                    $data['valuetglsttb'] = $this->convertDate($getData->row()->tanggal_sttb,'mysql');
                    $data['valuetgllulus'] = $this->convertDate($getData->row()->tanggal_lulus,'mysql');
                    $data['data'] = $this->getTransaksiPendidikan();
                    break;
                case 'pph':
                    
                    break;
                case 'seminar':
                    $data['form'] = "seminar";
                    $data['contentview'] = "content/form/transaksi/seminar";
                    $dataSelect = array(
                            "id_dt_seminar" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttseminar",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuelokasi'] = $getData->row()->lokasi;
                    $data['valuetglmulai'] = $this->convertDate($getData->row()->tgl_mulai_seminar,'mysql');
                    $data['valuetglselesai'] = $this->convertDate($getData->row()->tgl_akhir_seminar,'mysql');
                    $data['valueuraian'] = $getData->row()->uraian_seminar;
                    $data['valuetglsertifikat'] = $this->convertDate($getData->row()->tgl_sertifikat,'mysql');
                    $data['data'] = $this->getTransaksiSeminar();
                    break;
                case 'teguran':
                    $data['form'] = "teguran";
                    $data['contentview'] = "content/form/transaksi/hukuman";
                    $dataSelect = array(
                            "id_dt_teguran" => $dataKondisi
                        );
                    $getData = $this->Madmin->select("ttteguran",$dataSelect);
                    $data['valuenip'] = $getData->row()->nip;
                    $data['valuehukuman'] = $getData->row()->id_hukuman;
                    $data['valuetglsurat'] = $this->convertDate($getData->row()->tgl_surat,'mysql');
                    $data['valueperihal'] = $getData->row()->perihal;
                    $data['valueketeranganhukuman'] = $getData->row()->ket_hukuman;
                    $data['data'] = $this->getTransaksiTeguran();
                    break;
                case 'potongan':
                    
                    break;
                default:
                    $data['contentview'] = 'admin/content/404/404';
                    break;
                }
        }else{
            $data['contentview'] = 'admin/content/404/404';
        }
        $this->load->view('admin/html/dashboard',$data);
    }
    public function SaveTransaksi(){
        $params = $this->input->post();
        if($params['mode'] == 'create'){
            switch ($params['nameform']) {
                case 'golongan':
                        $foto1 = "no_image.png";
                        $foto2 = "no_image.png";
                        $foto3 = "no_image.png";
                    if($_FILES['filesatu']){
                        $target_path = 'assets/foto/sk/golongan/1/';
                        $target_path = $target_path . basename( $_FILES['filesatu']['name']);
                        if(move_uploaded_file($_FILES['filesatu']['tmp_name'], $target_path)) {
                            $foto1 = $_FILES['filesatu']['name'];
                        }
                    }
                    if($_FILES['filedua']){
                        $target_path = 'assets/foto/sk/golongan/2/';
                        $target_path = $target_path . basename( $_FILES['filedua']['name']);
                        if(move_uploaded_file($_FILES['filedua']['tmp_name'], $target_path)) {
                            $foto2 = $_FILES['filedua']['name'];
                        }
                    }
                    if($_FILES['filetiga']){
                        $target_path = 'assets/foto/sk/golongan/3/';
                        $target_path = $target_path . basename( $_FILES['filetiga']['name']);
                        if(move_uploaded_file($_FILES['filetiga']['tmp_name'], $target_path)) {
                            $foto3 = $_FILES['filetiga']['name'];
                        }
                    }
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'id_golongan' => $params['input-golongan'],
                            'tgl_sk_gol' => $this->convertDate($params['input-tglsk'],"php"),
                            'tgl_awal_gol' => $this->convertDate($params['input-tgla'],"php"),
                            'tgl_akhir_gol' => $this->convertDate($params['input-tglb'],"php"),
                            'foto1' => $foto1,
                            'foto2' => $foto2,
                            'foto3' => $foto3,
                            'keterangan' => $params['input-keterangan']
                        );
                    $query = $this->Madmin->insert('ttgolongan',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'jabatan':
                        $foto1 = "no_image.png";
                        $foto2 = "no_image.png";
                        $foto3 = "no_image.png";
                    if($_FILES['filesatu']){
                        $target_path = 'assets/foto/sk/jabatan/1/';
                        $target_path = $target_path . basename( $_FILES['filesatu']['name']);
                        if(move_uploaded_file($_FILES['filesatu']['tmp_name'], $target_path)) {
                            $foto1 = $_FILES['filesatu']['name'];
                        }
                    }
                    if($_FILES['filedua']){
                        $target_path = 'assets/foto/sk/jabatan/2/';
                        $target_path = $target_path . basename( $_FILES['filedua']['name']);
                        if(move_uploaded_file($_FILES['filedua']['tmp_name'], $target_path)) {
                            $foto2 = $_FILES['filedua']['name'];
                        }
                    }
                    if($_FILES['filetiga']){
                        $target_path = 'assets/foto/sk/jabatan/3/';
                        $target_path = $target_path . basename( $_FILES['filetiga']['name']);
                        if(move_uploaded_file($_FILES['filetiga']['tmp_name'], $target_path)) {
                            $foto3 = $_FILES['filetiga']['name'];
                        }
                    }

                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'id_jabatan' => $params['input-jabatan'],
                            'tgl_sk_jabatan' => $this->convertDate($params['input-tglsk'],"php"),
                            'tgl_awal_jab' => $this->convertDate($params['input-tgla'],"php"),
                            'tgl_akhir_jab' => $this->convertDate($params['input-tglb'],"php"),
                            'foto1' => $foto1,
                            'foto2' => $foto2,
                            'foto3' => $foto3,
                            'keterangan' => $params['input-keterangan']
                        );
                    $this->Madmin->insert('ttjabatan',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'keluarga':
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'nama_istri_suami' => $params['nama-istri-suami'],
                            'tgl_lahir_istri_suami' => $this->convertDate($params['tgl-istri-suami'],'php'),
                            'tempat_lahir_istri_suami' => $params['tempat-istri-suami'],
                            'anak1' => $params['anak1'],
                            'tgl_lahir_anak1' => $this->convertDate($params['tgl-anak1'],'php'),
                            'pendidikan_anak1' => $params['pendidikan-anak1'],
                            'anak2' => $params['anak2'],
                            'tgl_lahir_anak2' => $this->convertDate($params['tgl-anak2'], 'php'),
                            'pendidikan_anak2' => $params['pendidikan-anak2'],
                            'anak3' => $params['anak3'],
                            'tgl_lahir_anak3' => $this->convertDate($params['tgl-anak3'], 'php'),
                            'pendidikan_anak3' => $params['pendidikan-anak3']
                        );
                    $query = $this->Madmin->insert('ttkeluarga',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pelatihan':
                    if($_FILES['input-foto']){
                        $target_path = 'assets/foto/sertifikat/pelatihan/';
                        $target_path = $target_path . basename( $_FILES['input-foto']['name']);
                        if(move_uploaded_file($_FILES['input-foto']['tmp_name'], $target_path)) {

                        }
                    }
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'lokasi' => $params['input-lokasi'],
                            'tgl_mulai_pelatihan' => $this->convertDate($params['input-tglmulaipelatihan'],'php'),
                            'tgl_akhir_pelatihan' => $this->convertDate($params['input-tglakhirpelatihan'],'php'),
                            'uraian_pelatihan' => $params['input-uraian'],
                            'tgl_sertifikat' => $this->convertDate($params['input-tglsertifikat'],'php'),
                            'foto' => $_FILES['input-foto']['name']
                        );
                    $query = $this->Madmin->insert('ttpelatihan',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pendidikan':
                        $foto = "no_image.png";
                    if($_FILES['filefoto']){
                        $target_path = 'assets/foto/sertifikat/pendidikan/';
                        $target_path = $target_path . basename( $_FILES['filefoto']['name']);
                        if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {
                            $foto = $_FILES['filefoto']['name'];
                        }
                    }
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'tingkat_pendidikan' => $params['input-tingkat-pendidikan'],
                            'jurusan' => $params['input-jurusan'],
                            'uraian' => $params['input-uraian'],
                            'teknik_non_teknik' => $params['input-teknik'],
                            'sekolah' => $params['input-sekolah'],
                            'tempat_sekolah' => $params['input-tempat-sekolah'],
                            'nomor_sttb' => $params['input-nomor-sttb'],
                            'tanggal_sttb' => $this->convertDate($params['input-tanggal-sttb'],'php'),
                            'tanggal_lulus' => $this->convertDate($params['input-tanggal-lulus'],'php'),
                            'foto' => $foto
                        );
                    $query = $this->Madmin->insert('ttpendidikan',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pph':
                    
                    break;
                case 'seminar':
                    if($_FILES['input-foto']){
                        $target_path = 'assets/foto/sertifikat/seminar/';
                        $target_path = $target_path . basename( $_FILES['input-foto']['name']);
                        if(move_uploaded_file($_FILES['input-foto']['tmp_name'], $target_path)) {

                        }
                    }
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'lokasi' => $params['input-lokasi'],
                            'tgl_mulai_seminar' => $this->convertDate($params['input-tglmulaiseminar'],'php'),
                            'tgl_akhir_seminar' => $this->convertDate($params['input-tglakhirseminar'],'php'),
                            'uraian_seminar' => $params['input-uraian'],
                            'tgl_sertifikat' => $this->convertDate($params['input-tglsertifikat'],'php'),
                            'foto' => $_FILES['input-foto']['name']
                        );
                    $query = $this->Madmin->insert('ttseminar',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'teguran':
                    $dataInsert = array(
                            'nip' => $params['input-nip'],
                            'id_hukuman' => $params['input-id-hukuman'],
                            'tgl_surat' => $this->convertDate($params['input-tglsurat'],'php'),
                            'perihal' => $params['input-perihal'],
                            'ket_hukuman' => $params['input-keterangan-hukuman']
                        );
                    $query = $this->Madmin->insert('ttteguran',$dataInsert);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'potongan':
                    
                    break;
                default:
                    $redirect = '404';
                break;
            }
        }elseif($params['mode'] == 'update'){            
            switch ($params['nameform']) {
                case 'golongan':
                    if($_FILES['filesatu']){
                        $foto1 = "no_image.png";
                        $target_path = 'assets/foto/sk/golongan/1/';
                        $target_path = $target_path . basename( $_FILES['filesatu']['name']);
                        if(move_uploaded_file($_FILES['filesatu']['tmp_name'], $target_path)) {
                            $foto1 = $_FILES['filesatu']['name'];
                            $data['foto1'] = $foto1;
                        }
                    }
                    if($_FILES['filedua']){
                        $foto2 = "no_image.png";
                        $target_path = 'assets/foto/sk/golongan/2/';
                        $target_path = $target_path . basename( $_FILES['filedua']['name']);
                        if(move_uploaded_file($_FILES['filedua']['tmp_name'], $target_path)) {
                            $foto2 = $_FILES['filedua']['name'];
                            $data['foto2'] = $foto2;
                        }
                    }
                    if($_FILES['filetiga']){
                        $foto3 = "no_image.png";
                        $target_path = 'assets/foto/sk/golongan/3/';
                        $target_path = $target_path . basename( $_FILES['filetiga']['name']);
                        if(move_uploaded_file($_FILES['filetiga']['tmp_name'], $target_path)) {
                            $foto3 = $_FILES['filetiga']['name'];
                            $data['foto3'] = $foto3;
                        }
                    }

                    $table = "ttgolongan";
                    $kondisi = array(
                            'id_dt_golongan' => $params['id']
                        );
                    $data['nip'] = $params['input-nip'];
                    $data['id_golongan'] = $params['input-golongan'];
                    $data['tgl_sk_gol'] = $this->convertDate($params['input-tglsk'],"php");
                    $data['tgl_awal_gol'] = $this->convertDate($params['input-tgla'],"php");
                    $data['tgl_akhir_gol'] = $this->convertDate($params['input-tglb'],"php");
                    $data['keterangan'] = $params['input-keterangan'];
                    /*$data = array(
                            'nip' => $params['input-nip'],
                            'id_golongan' => $params['input-golongan'],
                            'tgl_sk_gol' => $this->convertDate($params['input-tglsk'],"php"),
                            'tgl_awal_gol' => $this->convertDate($params['input-tgla'],"php"),
                            'tgl_akhir_gol' => $this->convertDate($params['input-tglb'],"php"),
                            'keterangan' => $params['input-keterangan']
                        );*/
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'jabatan':
                    if($_FILES['filesatu']){
                        $foto1 = "no_image.png";
                        $target_path = 'assets/foto/sk/jabatan/1/';
                        $target_path = $target_path . basename( $_FILES['filesatu']['name']);
                        if(move_uploaded_file($_FILES['filesatu']['tmp_name'], $target_path)) {
                            $foto1 = $_FILES['filesatu']['name'];
                            $data['foto1'] = $foto1;
                        }
                    }
                    if($_FILES['filedua']){
                        $foto2 = "no_image.png";
                        $target_path = 'assets/foto/sk/jabatan/2/';
                        $target_path = $target_path . basename( $_FILES['filedua']['name']);
                        if(move_uploaded_file($_FILES['filedua']['tmp_name'], $target_path)) {
                            $foto2 = $_FILES['filedua']['name'];
                            $data['foto2'] = $foto2;
                        }
                    }
                    if($_FILES['filetiga']){
                        $foto3 = "no_image.png";
                        $target_path = 'assets/foto/sk/jabatan/3/';
                        $target_path = $target_path . basename( $_FILES['filetiga']['name']);
                        if(move_uploaded_file($_FILES['filetiga']['tmp_name'], $target_path)) {
                            $foto3 = $_FILES['filetiga']['name'];
                            $data['foto3'] = $foto3;
                        }
                    }                
                    $table = "ttjabatan";
                    $kondisi = array(
                            'id_dt_jabatan' => $params['id']
                        );
                    $data['nip'] = $params['input-nip'];
                    $data['id_jabatan'] = $params['input-jabatan'];
                    $data['tgl_sk_jabatan'] = $this->convertDate($params['input-tglsk'],"php");
                    $data['tgl_awal_jab'] = $this->convertDate($params['input-tgla'],"php");
                    $data['tgl_akhir_jab'] = $this->convertDate($params['input-tglb'],"php");
                    $data['keterangan'] = $params['input-keterangan'];
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'keluarga':
                    $table = "ttkeluarga";
                    $kondisi = array(
                            'id_dt_keluarga' => $params['id']
                        );
                    $data = array(
                            'nip' => $params['input-nip'],
                            'nama_istri_suami' => $params['nama-istri-suami'],
                            'tgl_lahir_istri_suami' => $this->convertDate($params['tgl-istri-suami'],'php'),
                            'tempat_lahir_istri_suami' => $params['tempat-istri-suami'],
                            'anak1' => $params['anak1'],
                            'tgl_lahir_anak1' => $this->convertDate($params['tgl-anak1'],'php'),
                            'pendidikan_anak1' => $params['pendidikan-anak1'],
                            'anak2' => $params['anak2'],
                            'tgl_lahir_anak2' => $this->convertDate($params['tgl-anak2'], 'php'),
                            'pendidikan_anak2' => $params['pendidikan-anak2'],
                            'anak3' => $params['anak3'],
                            'tgl_lahir_anak3' => $this->convertDate($params['tgl-anak3'], 'php'),
                            'pendidikan_anak3' => $params['pendidikan-anak3']
                    );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pelatihan':
                    if($_FILES['input-foto']){
                        $target_path = 'assets/foto/sertifikat/pelatihan/';
                        $target_path = $target_path . basename( $_FILES['input-foto']['name']);
                        if(move_uploaded_file($_FILES['input-foto']['tmp_name'], $target_path)) {

                        }
                    }
                    $table = "ttpelatihan";
                    $kondisi = array(
                            'id_dt_pelatihan' => $params['id']
                        );
                    $data = array(
                            'nip' => $params['input-nip'],
                            'lokasi' => $params['input-lokasi'],
                            'tgl_mulai_pelatihan' => $this->convertDate($params['input-tglmulaipelatihan'],'php'),
                            'tgl_akhir_pelatihan' => $this->convertDate($params['input-tglakhirpelatihan'],'php'),
                            'uraian_pelatihan' => $params['input-uraian'],
                            'tgl_sertifikat' => $this->convertDate($params['input-tglsertifikat'],'php'),
                            'foto' => $_FILES['input-foto']['name']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pendidikan':
                    if($_FILES['filefoto']){
                        $foto = "no_image.png";
                        $target_path = 'assets/foto/sertifikat/pendidikan/';
                        $target_path = $target_path . basename( $_FILES['filefoto']['name']);
                        if(move_uploaded_file($_FILES['filefoto']['tmp_name'], $target_path)) {
                            $data['foto'] = $_FILES['filefoto']['name'];
                        }
                    }
                    $table = "ttpendidikan";
                    $kondisi = array(
                            'id_dt_pendidikan' => $params['id']
                        );
                    $data['nip'] = $params['input-nip'];
                    $data['tingkat_pendidikan'] = $params['input-tingkat-pendidikan'];
                    $data['jurusan'] = $params['input-jurusan'];
                    $data['uraian'] = $params['input-uraian'];
                    $data['teknik_non_teknik'] = $params['input-teknik'];
                    $data['sekolah'] = $params['input-sekolah'];
                    $data['tempat_sekolah'] = $params['input-tempat-sekolah'];
                    $data['nomor_sttb'] = $params['input-nomor-sttb'];
                    $data['tanggal_sttb'] = $this->convertDate($params['input-tanggal-sttb'],'php');
                    $data['tanggal_lulus'] = $this->convertDate($params['input-tanggal-lulus'],'php');
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'pph':
                    
                    break;
                case 'seminar':
                    if($_FILES['input-foto']){
                        $target_path = 'assets/foto/sertifikat/seminar/';
                        $target_path = $target_path . basename( $_FILES['input-foto']['name']);
                        if(move_uploaded_file($_FILES['input-foto']['tmp_name'], $target_path)) {

                        }
                    }
                    $table = "ttseminar";
                    $kondisi = array(
                            'id_dt_seminar' => $params['id']
                        );
                    $data = array(
                            'nip' => $params['input-nip'],
                            'lokasi' => $params['input-lokasi'],
                            'tgl_mulai_seminar' => $this->convertDate($params['input-tglmulaiseminar'],'php'),
                            'tgl_akhir_seminar' => $this->convertDate($params['input-tglakhirseminar'],'php'),
                            'uraian_seminar' => $params['input-uraian'],
                            'tgl_sertifikat' => $this->convertDate($params['input-tglsertifikat'],'php'),
                            'foto' => $_FILES['input-foto']['name']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'teguran':
                    $table = "ttteguran";
                    $kondisi = array(
                            'id_dt_teguran' => $params['id']
                        );
                    $data = array(
                            'nip' => $params['input-nip'],
                            'id_hukuman' => $params['input-id-hukuman'],
                            'tgl_surat' => $this->convertDate($params['input-tglsurat'],'php'),
                            'perihal' => $params['input-perihal'],
                            'ket_hukuman' => $params['input-keterangan-hukuman']
                        );
                    $query = $this->Madmin->update($table,$kondisi,$data);
                    $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                    break;
                case 'potongan':
                    
                    break;
                default:
                    $redirect = '404';
                break;
            }
        }elseif($params['mode'] == 'delete'){
            switch ($params['nameform']) {
                    case 'golongan':
                        $table = "ttgolongan";
                        $kondisi = array(
                                'id_dt_golongan' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'jabatan':
                        $table = "ttjabatan";
                        $kondisi = array(
                                'id_dt_jabatan' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'keluarga':
                        $table = "ttkeluarga";
                        $kondisi = array(
                                'id_dt_keluarga' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'pelatihan':
                        $table = "ttpelatihan";
                        $kondisi = array(
                                'id_dt_pelatihan' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'pendidikan':
                        $table = "ttpendidikan";
                        $kondisi = array(
                                'id_dt_pendidikan' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'pph':
                        
                        break;
                    case 'seminar':
                        $table = "ttseminar";
                        $kondisi = array(
                                'id_dt_seminar' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        break;
                    case 'teguran':
                        $table = "ttteguran";
                        $kondisi = array(
                                'id_dt_teguran' => $params['id']
                            );
                        $query = $this->Madmin->delete($table,$kondisi);
                        $redirect = base_url('index.php/admin/transaksi/create/'.$params['nameform']);
                        
                        break;
                    case 'potongan':
                        
                        break;
                    default:
                        $redirect = '404';
                    break;
                }
        }
        if($query){
            $StringNotif = "success";
        }else{
            $StringNotif = "error";
        }
        $this->session->set_flashdata('notif_succes',$StringNotif);
        header("location:".$redirect);
    }
    public function detailPegawai($id){
        $kondisi = array(
                'id_pegawai' => $id
            );
        $table = "master_pegawai";
        $query = $this->Madmin->select($table,$kondisi);
        $data['nip'] = $query->row()->nip;
        $data['nama_pegawai'] = $query->row()->nama_pegawai;
        $data['tempat_lahir'] = $query->row()->tempat_lahir;
        $data['tanggal_lahir'] = $query->row()->tanggal_lahir;
        $data['jenis_kelamin'] = $query->row()->jenis_kelamin;
        $data['agama'] = $query->row()->agama;
        $data['alamat_skrg'] = $query->row()->alamat_skrg;
        $data['alamat_ktp'] = $query->row()->alamat_ktp;
        $data['no_ktp'] = $query->row()->no_ktp;
        $data['gapok'] = $query->row()->gapok;
        $data['foto'] = $query->row()->foto;
        $data['id'] = $id;
        $data['keluarga'] = $this->detailkeluargaPegawai($id);
        $data['golongan'] = $this->_getDetailGolongan($id);
        $data['jabatan'] = $this->_getDetailJabatan($id);
        $data['pelatihan'] = $this->_getDetailPelatihan($id);
        $data['pendidikan'] = $this->_getDetailPendidikan($id);
        $data['seminar'] = $this->_getDetailSeminar($id);
        $data['teguran'] = $this->_getDetailTeguran($id);
        $data['contentview'] = "content/form/profilpegawai";
        $this->load->view("html/dashboard",$data);
    }
    public function convertDate($date,$from = 'mysql'){
        if(strlen($date)>0){
            if($from == "mysql"){
                $dataTanggal = explode("-", $date);
                return $dataTanggal[1]."/".$dataTanggal[2]."/".$dataTanggal[0];
            }else{
                $dataTanggal = explode("/", $date);
                return $dataTanggal[2]."-".$dataTanggal[0]."-".$dataTanggal[1];
            }
        }else{
            if($from == "mysql"){
                return date('m/d/Y');
            }else{
                return date('Y-m-d');
            }
        }
    }
    public function detailkeluargaPegawai($id){
        $StringQuery = "SELECT
                        ttkeluarga.*
                        FROM
                        ttkeluarga
                        INNER JOIN master_pegawai ON ttkeluarga.nip = master_pegawai.nip
                        WHERE master_pegawai.id_pegawai = $id";
        $query = $this->Madmin->query($StringQuery);
        return $query;
    }
    public function RincianPegawai(){
        $data['contentview'] = "content/form/laporan/rincian_pegawai";

        $this->load->view("html/dashboard",$data);
    }
    public function getCountRincianPegawai($jenis_kelamin = 'LAKI-LAKI', $bagian = 'DIREKSI'){
        $stringquery = "SELECT
                        COUNT(master_pegawai.nip) as total
                        FROM
                        master_pegawai
                        INNER JOIN master_bagian ON master_pegawai.id_bagian = master_bagian.id_bagian
                        INNER JOIN master_unit_kerja ON master_pegawai.id_unit_kerja = master_unit_kerja.id_unit_kerja
                        WHERE jenis_kelamin = '".$jenis_kelamin."'
                        AND master_bagian.nama_bagian = '".$bagian."'";
        $query = $this->Madmin->query($stringquery);
        if($query->num_rows() > 0){
            return $query->row()->total;
        }else{
            return 0;
        }
    }
    public function getCountRincianPendidikanPegawai($jenis_kelamin = 'LAKI-LAKI', $tingkat_pendidikan = 'S2'){
        $stringQuery = "SELECT
                        COUNT(master_pegawai.nip) as total
                        FROM
                        master_pegawai
                        INNER JOIN ttpendidikan ON master_pegawai.nip = ttpendidikan.nip
                        WHERE 
                        ttpendidikan.tingkat_pendidikan = '".$tingkat_pendidikan."'
                        AND
                        master_pegawai.jenis_kelamin = '".$jenis_kelamin."'";
        $query = $this->Madmin->query($stringQuery);
        if($query->num_rows() > 0){
            return $query->row()->total;
        }else{
            return 0;
        }
    }
    public function getRincianKawinPegawai($tanggungan = 'KAWIN', $unit_kerja = 'KANTOR PUSAT'){
        $stringquery = "SELECT
                        COUNT(master_pegawai.nip) as total
                        FROM
                        master_pegawai
                        INNER JOIN master_tanggungan ON master_pegawai.status_perkawinan = master_tanggungan.id_tanggungan
                        INNER JOIN master_unit_kerja ON master_pegawai.id_unit_kerja = master_unit_kerja.id_unit_kerja
                        WHERE master_tanggungan.nama_tanggungan LIKE '".$tanggungan."%'
                        AND master_unit_kerja.nama_unit_kerja = '".$unit_kerja."'
                        ";
        $query = $this->Madmin->query($stringquery);
        if($query->num_rows() > 0){
            return $query->row()->total;
        }else{
            return 0;
        }
    }
    public function getCountRincianPangkatPegawai($unit_kerja = 'KANTOR PUSAT', $golongan = 'IVD', $status = 'PENUH'){
        $stringquery = "SELECT
                        COUNT(master_pegawai.nip) as total
                        FROM
                        master_unit_kerja
                        INNER JOIN master_pegawai ON master_unit_kerja.id_unit_kerja = master_pegawai.id_unit_kerja
                        INNER JOIN master_gol ON master_pegawai.id_golongan = master_gol.id_golongan
                        INNER JOIN master_status_pegawai ON master_pegawai.id_status_pegawai = master_status_pegawai.id_status_pegawai
                        WHERE
                        master_unit_kerja.nama_unit_kerja = '".$unit_kerja."'
                        AND
                        master_gol.nama_golongan = '".$golongan."'
                        AND
                        master_status_pegawai.nama_status = '".$status."'";
        $query = $this->Madmin->query($stringquery);
        if($query->num_rows() > 0){
            return $query->row()->total;
        }else{
            return 0;
        }
    }
    public function getCountRincianPegawaiTeknik($unit_kerja = 'Kantor Pusat', $kategori = 'UMUM'){
        $stringquery = "SELECT
                        COUNT(master_pegawai.nip) as total
                        FROM
                        master_pegawai
                        INNER JOIN master_unit_kerja ON master_pegawai.id_unit_kerja = master_unit_kerja.id_unit_kerja
                        INNER JOIN master_bagian ON master_pegawai.id_bagian = master_bagian.id_bagian
                        WHERE master_unit_kerja.nama_unit_kerja = '".$unit_kerja."' AND master_bagian.kateogri = '".$kategori."'";
        $query = $this->Madmin->query($stringquery);
        if($query->num_rows() > 0){
            return $query->row()->total;
        }else{
            return 0;
        }
    }
    public function _getDetailGolongan($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        master_gol.nama_golongan,
                        ttgolongan.tgl_sk_gol,
                        ttgolongan.tgl_awal_gol,
                        ttgolongan.tgl_akhir_gol,
                        ttgolongan.keterangan
                        FROM
                        master_pegawai
                        INNER JOIN ttgolongan ON master_pegawai.nip = ttgolongan.nip
                        INNER JOIN master_gol ON ttgolongan.id_golongan = master_gol.id_golongan
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttgolongan.id_dt_golongan DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function _getDetailJabatan($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        master_jabatan.nama_jabatan,
                        ttjabatan.tgl_sk_jabatan,
                        ttjabatan.tgl_awal_jab,
                        ttjabatan.tgl_akhir_jab,
                        ttjabatan.keterangan
                        FROM
                        master_pegawai
                        INNER JOIN ttjabatan ON master_pegawai.nip = ttjabatan.nip
                        INNER JOIN master_jabatan ON ttjabatan.id_jabatan = master_jabatan.id_jabatan
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttjabatan.id_dt_jabatan DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function _getDetailPelatihan($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        ttpelatihan.foto,
                        ttpelatihan.tgl_sertifikat,
                        ttpelatihan.uraian_pelatihan,
                        ttpelatihan.tgl_akhir_pelatihan,
                        ttpelatihan.tgl_mulai_pelatihan,
                        ttpelatihan.lokasi,
                        ttpelatihan.nip
                        FROM
                        master_pegawai
                        INNER JOIN ttpelatihan ON master_pegawai.nip = ttpelatihan.nip
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttpelatihan.id_dt_pelatihan DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function _getDetailPendidikan($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        ttpendidikan.tingkat_pendidikan,
                        ttpendidikan.jurusan,
                        ttpendidikan.uraian,
                        ttpendidikan.teknik_non_teknik,
                        ttpendidikan.sekolah,
                        ttpendidikan.tempat_sekolah,
                        ttpendidikan.nomor_sttb,
                        ttpendidikan.tanggal_sttb,
                        ttpendidikan.tanggal_lulus
                        FROM
                        master_pegawai
                        INNER JOIN ttpendidikan ON master_pegawai.nip = ttpendidikan.nip
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttpendidikan.id_dt_pendidikan DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function _getDetailSeminar($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        ttseminar.lokasi,
                        ttseminar.tgl_mulai_seminar,
                        ttseminar.tgl_akhir_seminar,
                        ttseminar.uraian_seminar,
                        ttseminar.tgl_sertifikat,
                        ttseminar.foto
                        FROM
                        master_pegawai
                        INNER JOIN ttseminar ON master_pegawai.nip = ttseminar.nip
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttseminar.id_dt_seminar DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function _getDetailTeguran($id){
        $stringquery = "SELECT
                        master_pegawai.nip,
                        ttteguran.id_hukuman,
                        ttteguran.tgl_surat,
                        ttteguran.perihal,
                        ttteguran.ket_hukuman,
                        master_hukuman.nama_hukuman
                        FROM
                        master_pegawai
                        INNER JOIN ttteguran ON master_pegawai.nip = ttteguran.nip
                        INNER JOIN master_hukuman ON ttteguran.id_hukuman = master_hukuman.id_hukuman
                        WHERE master_pegawai.id_pegawai = $id
                        ORDER BY ttteguran.id_dt_teguran DESC";
        $query = $this->Madmin->query($stringquery);
        return $query;
    }
    public function prosesRincianPegawai(){
        $data['queryBagian'] = $this->Madmin->get('master_bagian');
        $this->load->view("content/form/laporan/table/rincian_pegawai",$data);
    }
    public function prosesRincianPendidikanPegawai(){
        $this->load->view("content/form/laporan/table/rincian_pendidikan_pegawai");
    }
    public function RincianPendidikanPegawai(){
        $data['contentview'] = "content/form/laporan/rincian_pendidikan_pegawai";

        $this->load->view("html/dashboard",$data);
    }
    public function prosesRincianPangkatPegawai(){
        $data['queryUnit'] = $this->Madmin->get('master_unit_kerja');
        $this->load->view("content/form/laporan/table/rincian_pangkat_pegawai", $data);
    }
    public function RincianPangkatPegawai(){
        $data['contentview'] = "content/form/laporan/rincian_pangkat_pegawai";

        $this->load->view("html/dashboard",$data);
    }
    public function IsChecked($chkname,$value)
    {
		$x = $this->input->post($chkname);
        if(!empty($x))
        {
            foreach($x as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
    public function cari(){
        if($this->input->post('submit') == 'proses'){
            $params = $this->input->post();
            if(!empty($params['opsi'])){
                
                $this->IsChecked('opsi','umur') ? $dataQuery['TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) '.$params['operator-umur']] = $params['input-umur']: "";
                $this->IsChecked('opsi','jabatan') ? $dataQuery['master_jabatan.id_jabatan'] = $params['input-jabatan']: "";
                $this->IsChecked('opsi','golongan') ? $dataQuery['master_gol.id_golongan'] = $params['input-golongan']: "";
                $this->IsChecked('opsi','pendidikan') ? $dataQuery['ttpendidikan.tingkat_pendidikan LIKE'] = $params['input-tingkat-pendidikan']."%": "";

                $this->IsChecked('opsi','pendidikan') ? $dataOpsi['pendidikan'] = 1: $dataOpsi['pendidikan'] = 0;

                $query = $this->Madmin->cari($dataQuery,$dataOpsi);
                $data['QueryHasilCari'] = $query;
                $data['query'] = $this->session->userdata('last_query');
                $data['submitCetak'] = 'cetak';
                $data['print'] = 0;
                $data['viewCetak'] = 'content/form/transaksi/table/pencarian';
                $data['namaQuery'] = 'QueryHasilCari';
                $this->load->view('content/form/transaksi/table/pencarian',$data);
            }
        }else{
            $data['contentview'] = "content/form/transaksi/pencarian";
            $this->load->view("html/dashboard",$data);
        }
    }
    public function RincianPegawaiTeknik(){
        $data['contentview'] = "content/form/laporan/rincian_pegawai_teknik";
        $this->load->view("html/dashboard",$data);
    }
    public function prosesRincianPegawaiTeknik(){
        $data['queryUnitKerja'] = $this->Madmin->get('master_unit_kerja');
        $this->load->view("content/form/laporan/table/rincian_pegawai_teknik",$data);
    }
    public function tanggalPensiun($date){
        $dataDate = explode("/", $date);
        $tahun = $dataDate[2] + 56;
        $bulan = $dataDate[0];
        $tanggal = $dataDate[1];
        return $tahun."-".$bulan."-".$tanggal;
    }
    public function cetak(){
        $params = $this->input->post();
        $view = $params['viewCetak'];
        $namaQuery = $params['namaQuery'];
        $query = isset($params['query']) ? $params['query'] : '' ;
        $mode = $this->IsChecked('excel','excel') ? '' : 'view' ;

        if($mode != 'view'){
            $data['print'] = 1;
            $data['dataPrint'] = 'admin/content/print/print';
        }else{
            $data['print'] = 2;
            $data['dataPrint'] = '';
        }
            $data[$namaQuery] = $this->Madmin->query($query);
            $data['dataReport'] = $view;
        $this->load->view('admin/content/print/contentPrint',$data);
    }

}