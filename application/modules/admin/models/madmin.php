
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Madmin extends CI_Model {
     function __construct()
    {
        parent::__construct();
    }
    public function like($table,$data){
        $this->load->database();
        $this->db->like($data);
        $query = $this->db->get($table);
        $this->db->close();
        return $query;
    }
    public function get($table){
        $this->load->database();
        $query = $this->db->get($table);
        $this->db->close();
        return $query;
    }
    public function query($string){
        $this->load->database();
        $query = $this->db->query($string);
        $this->db->close();
        return $query;
    }
    public function select($table,$data)
    {
    	$this->load->database();
    	$this->db->where($data);
    	$query = $this->db->get($table);
    	$this->db->close();
        return $query;
    }
    public function insert($table,$data)
    {
    	$this->load->database();
    	$query = $this->db->insert($table,$data);
    	$this->db->close();
        return $query;
    }
    public function update($table,$kondisi,$data)
    {
    	$this->load->database();
        $this->db->where($kondisi);
        $query = $this->db->update($table,$data);
    	$this->db->close();
        return $query;
    }
    public function delete($table,$kondisi)
    {
    	$this->load->database();
        $this->db->where($kondisi);
        $query = $this->db->delete($table);
    	$this->db->close();
        return $query;
    }
    public function join($master,$join,$data){
        $this->load->database();
        $this->db->select('*');
        $this->db->from($master);
        $this->db->join($join);
        $this->db->where($data);
        $query = $this->db->get();
        $this->db->close();
        return $query;
    }
    public function cari($data,$dataOpsi){
        $this->load->database();
        $this->db->select('*');
        $this->db->from('master_pegawai');
        $dataOpsi['pendidikan'] == 1 ? $this->db->join('ttpendidikan', 'master_pegawai.nip = ttpendidikan.nip') : "" ;
        $this->db->join('master_gol', 'master_gol.id_golongan = master_pegawai.id_golongan');
        $this->db->join('master_jabatan', 'master_jabatan.id_jabatan = master_pegawai.id_jabatan');
        $this->db->join('master_unit_kerja', 'master_unit_kerja.id_unit_kerja = master_pegawai.id_unit_kerja');
        $this->db->where($data);
        $this->db->group_by('master_pegawai.nip');
        $this->db->order_by('master_unit_kerja.id_unit_kerja');
        $this->db->order_by('master_jabatan.id_jabatan');
        $this->db->order_by('master_gol.id_golongan');
        $query = $this->db->get();
        $this->returnQuery();
        $this->db->close();
        return $query;
    }
    public function returnQuery(){
        $this->load->database();
        $this->session->set_userdata('last_query', $this->db->last_query());
        $this->db->close();
    }
}