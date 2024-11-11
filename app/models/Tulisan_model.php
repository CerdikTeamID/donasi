<?php 

class Tulisan_model {

	private $table='tbl_tulisan';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAlltulisan()
	{
		$this->db->query("SELECT * FROM tbl_tulisan");
	 		return $this->db->resultSet();
	}

	public function getgambar()
   {
      $this->db->from('tbl_tulisan');    
      $this->db->order_by('bukti_donasi', 'desc');
      $this->db->limit(5);
      return $this->db->get()->result();
   }
	public function getdonasiById($id)
	{

		$this->db->query("SELECT * FROM tbl_tulisan WHERE id_donasi=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function editDataDonasi($data){
		$tgl_validasi = date("Y-m-d");

		$query = "UPDATE t_donasi SET 
		tgl_validasi= :tgl_validasi,
		id_amil= :id_amil,
		status_validasi= :status_validasi
		WHERE id_donasi = :id_donasi ";

		$this->db->query($query);
		$this->db->bind('id_donasi', $data['id_donasi']);
		$this->db->bind('tgl_validasi', $tgl_validasi);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('status_validasi', $data['status_validasi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}