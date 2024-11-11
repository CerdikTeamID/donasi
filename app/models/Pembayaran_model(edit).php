<?php 

class Pembayaran_model {

	private $table='t_pembayaran';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllPembayaran()
	{
		$this->db->query("SELECT * FROM t_pembayaran JOIN t_pembayar USING(id_pembayar) JOIN t_amil USING(id_amil) join t_zakat using(id_zakat)");
	 		return $this->db->resultSet();
	}

	public function getAllPembayaran2()
	{
		error_reporting(0);
		include "app/config/koneksi.php";
		$i=0;
		$ii=0;
		$iii=0;
		$iiii=0;
		$cek=0;
		$cek=$db->query("SELECT sum(pembayaran_uang) as jumlah_uang FROM t_pembayaran where pembayaran_beras='0'");
		while ($lihat=$cek->fetch()){
			$jumlah_uang = $lihat['jumlah_uang'];
			$data[$i]['jumlah_uang']=$jumlah_uang;
			$i++;			
		}

		$cek2=$db->query("SELECT sum(pembayaran_beras) as jumlah_beras FROM t_pembayaran where pembayaran_uang='0'");
		while ($lihat2=$cek2->fetch()){
			$jumlah_beras = $lihat2['jumlah_beras'];
			$data[$ii]['jumlah_beras']=$jumlah_beras;
			$ii++;
		}

		$cek3=$db->query("SELECT count(id_penerima) as id_p FROM t_penerima");
		while ($lihat3=$cek3->fetch()){
			$id_p = $lihat3['id_p'];
			$data[$iii]['id_p']=$id_p;

			$bagi = $jumlah_uang/$id_p;
			$data[$iii]['bagi']=$bagi;
			$iii++;
		}
			$cek4=$db->query("SELECT count(id_penerima) as id_b FROM t_penerima");
		while ($lihat4=$cek4->fetch()){
			$id_b = $lihat4['id_b'];
			$data[$iiii]['id_b']=$id_b;

			$bagi = $jumlah_uang/$id_b;
			$data[$iiii]['bagi']=$bagi;

			$bagi2 = $jumlah_beras/$id_b;
			$data[$iiii]['bagi2']=$bagi2;
			$iiii++;
		}

		return $data;
	}

	public function getPembayaranById($id)
	{

		$this->db->query("SELECT * FROM t_pembayaran join t_pembayar using(id_pembayar) WHERE id_pembayaran=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataPembayaranweb($data)
	{
		
		include "app/config/koneksi.php";
		// $id_pembayaran = $data[''];
		// $id_zakat = $data[''];
		$nama_pembayar = $data['nama_pembayar'];
		$no_pembayar = $data['no_hp_pembayar'];
		$alamat_pembayar = $data['alamat_pembayar'];
		$masjid = $data['nama_mesjid'];
		$jenis_zakat = $data['jenis_zakat'];
		$jumlah_tanggungan = $data['jumlah_tanggungan'];
		$jenis_pembayaran = $data['jenis_pembayaran'];
		$pembayaran_berasnya = $data['pembayaran_beras'];
		$pembayaran_uangnya = $data['pembayaran_uang'];
		$total_pembayaran = $data['total_pembayaran'];
		$tgl_penyerahan = $data['tgl_penyerahan'];
		
		if ($jenis_pembayaran == "beras") {
			$pembayaran_beras = $data['pembayaran_beras'];
			$total_pembayaran = $pembayaran_beras;
		} else ($jenis_pembayaran == "uang") {
			$pembayaran_uang = $data['pembayaran_uang'];
			$total_pembayaran = $pembayaran_uang;
		}
			$query1 = "INSERT INTO t_pembayarweb
			VALUES (:id_pembayar, :nama_pembayar, :no_hp_pembayar, :alamat_pembayar,  :nama_mesjid, :jenis_zakat, :jumlah_tanggungan, :jenis_pembayaran, :pembayaran_beras, :pembayaran_uang, :total_pembayaran, :tgl_penyerahan)";
			$this->db->query($query1);
			$this->db->bind('id_pembayar', $id_pembayar);
			$this->db->bind('nama_pembayar', $data['nama_pembayar']);
			$this->db->bind('no_hp_pembayar', $data['no_hp_pembayar']);
			$this->db->bind('alamat_pembayar', $data['alamat_pembayar']);
			$this->db->bind('nama_mesjid', $data['nama_mesjid']);
			$this->db->bind('jenis_zakat', $data['jenis_zakat']);
			$this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
			$this->db->bind('jenis_pembayaran', $data['jenis_pembayaran']);
			$this->db->bind('pembayaran_beras', $data['pembayaran_uang']);
			$this->db->bind('total_pembayaran', $data['total_pembayaran']);
			$this->db->bind('tgl_penyerahan', $data['tgl_penyerahan']);
			$this->db->execute();

			

		return $this->db->rowCount();

	}
	
	public function hapusDataPembayaran($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_pembayaran= :id_pembayaran";
		$this->db->query($query);
		$this->db->bind('id_pembayaran',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataPembayaran($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembayaran=:id_pembayaran');
		$this->db->bind('id_pembayaran',$id);
		return $this->db->single();
	}

	public function editDataPembayaran($data){

		include "app/config/koneksi.php";

		$jumlah_tanggungan = $data['jumlah_tanggungan'];
		$pembayaran_berasnya = $data['pembayaran_beras'];
		$pembayaran_uangnya = $data['pembayaran_uang'];

		if($pembayaran_uangnya=='0' || $pembayaran_uangnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang = $data['pembayaran_uang'];
			$total_pembayaran=$jumlah_tanggungan*$pembayaran_berasnya;
		}
		elseif($pembayaran_berasnya=='0' || $pembayaran_berasnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang=$pembayaran_uangnya/$jumlah_tanggungan;
			$total_pembayaran = $pembayaran_uangnya;
		}

		$query = "UPDATE t_pembayaran SET 
		id_zakat= :id_zakat,
		id_amil= :id_amil,
		pembayaran_beras= :pembayaran_beras,
		pembayaran_uang= :pembayaran_uang,
		jumlah_tanggungan= :jumlah_tanggungan,
		total_pembayaran= :total_pembayaran,
		tgl_penyerahan= :tgl_penyerahan
		WHERE id_pembayaran = :id_pembayaran ";

		$this->db->query($query);
		$this->db->bind('id_pembayaran', $data['id_pembayaran']);
		$this->db->bind('id_zakat', $data['id_zakat']);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('tgl_penyerahan', $data['tgl_penyerahan']);
		$this->db->bind('pembayaran_beras', $pembayaran_beras);
		$this->db->bind('pembayaran_uang', $pembayaran_uang);
		$this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
		$this->db->bind('total_pembayaran', $total_pembayaran);
		$this->db->execute();

		return $this->db->rowCount();
	}

}