<?php 

class Web extends Controller {
	

	
	public function index()
	{
		$data['judul'] = 'Zakat';
		$berita['berita'] = $this->model('Tulisan_model')->getAlltulisan();
		// $data['berita'] = $this->model('Tulisan_model')->getAllTulisan();
		// $data['pnr'] = $this->model('Tulisan_model')->getAllTulisan();
		$data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$data['pnr'] = $this->model('Donasi_model')->getAllDonasi();

		$this->view('templates/header_web', $data);
		$this->view('web/index', $data);
		$this->view('templates/footer_web');
		$this->form_validation->set_rules('nama_pembayar', 'Nama Pembayar', 'required');
        $this->form_validation->set_rules('no_hp_pembayar', 'No HP Pembayar', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('mesjid', 'Mesjid', 'required');
        $this->form_validation->set_rules('jenis_zakat', 'Jenis Zakat', 'required');
        $this->form_validation->set_rules('jumlah_tanggungan', 'Jumlah Tanggungan', 'required');
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required');
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required');


        // if ($this->form_validation->run() == FALSE) {

        //     $this->load->view('templates/header_web', $data);
        //     $this->load->view('web/index');
        //     $this->load->view('templates/footer_web');

        // } else {

        //     $data['total_pembayaran'] = $this->zakat_model->hitung_total_pembayaran();

        //     $this->load->view('templates/header_web', $data);
        //     $this->load->view('web/hasil_pembayaran', $data);
        //     $this->load->view('templates/footer_web');

        // }
	}

	public function profil()
	{
		$data['judul'] = 'About - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('templates/header_web', $data);
		$this->view('web/profil', $data);
		$this->view('templates/footer_web');
	}

	// public function berita()
	// {
	// 	$data['judul'] = 'berita';
	// 	$data['berita'] = $this->model('Tulisan_model')->getAllTulisan();

	// 	$this->view('templates/header_web', $data);
	// 	$this->view('web/profil', $data);
	// 	$this->view('templates/footer_web');
	// }

	public function partner()
	{
		$data['pnr'] = $this->model('Donasi_model')->getAllDonasi();
		// $data['gambar'] = $this->model('Donasi_model')->getgambar();
		$data['judul'] = 'Kerjasama Mesjid - Zakat';
		$data['mesjid'] = $this->model('Web_model')->getAllMesjid();
		
		$this->view('templates/header_web', $data);
		$this->view('web/partner', $data);
		$this->view('templates/footer_web');
	}
	public function bayarzakat()
	{
		$data['judul'] = 'Pembayaran - Zakat';
		$data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$data['zakat'] = $this->model('Zakat_model')->getAllZakat();
		$data['mesjid'] = $this->model('Web_model')->getAllZakat();
		$this->view('templates/header_web', $data);
		$this->view('web/bayarzakat', $data);
		$this->view('templates/footer_web');
	}
	public function bayarinfaq(){
		$data['judul'] = 'Pembayaran - Infaq';
		$data['pnr'] = $this->model('Infak_model')->getAllInfak();
		$data['totalnya'] = $this->model('Infak_model')->getAllInfak2();
		$data['zakat'] = $this->model('Zakat_model')->getAllZakat();
		$data['mesjid'] = $this->model('Web_model')->getAllZakat();
		$this->view('templates/header_web', $data);
		$this->view('web/bayarinfaq', $data);
		$this->view('templates/footer_web');
	}

	public function aksi_tambah_infak(){
		if($this->model('Infak_model')->tambahDataInfak($_POST) > 0) {
			header('Location:' . BASEURL .'/web/selesaiInfak');
			exit;
		}
	}

	public function selesaiInfak()
	{
		$data['judul'] = 'Selesai Infak - Zakat';
		
		$this->view('templates/header_web', $data);
		$this->view('web/selesai_infak', $data);
		$this->view('templates/footer_web');
	}
		public function bayarshodaqoh()
	{
		$data['judul'] = 'Pembayaran - Infaq';
		$data['pnr'] = $this->model('Infak_model')->getAllInfak();
		$data['totalnya'] = $this->model('Infak_model')->getAllInfak2();
		$data['zakat'] = $this->model('Zakat_model')->getAllZakat();
		$data['mesjid'] = $this->model('Web_model')->getAllZakat();
		$this->view('templates/header_web', $data);
		$this->view('web/bayarshodaqoh', $data);
		$this->view('templates/footer_web');
	}
	public function aksi_tambah_shodaqoh(){
		if($this->model('Infak_model')->tambahDataInfak($_POST) > 0) {
			header('Location:' . BASEURL .'/web/selesai_shodaqoh');
			exit;
		}
	}

	public function selesaiShodaqoh()
	{
		$data['judul'] = 'Selesai Shodaqoh - Zakat';
		
		$this->view('templates/header_web', $data);
		$this->view('web/selesai_shodaqoh', $data);
		$this->view('templates/footer_web');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Pembayaran';
		$data['Zakat'] = $this->model('Zakat_model')->getAllZakat();
		$data['Mesjid'] = $this->model('Mesjid_model')->getAllMesjid();
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();

		$this->view('home_index/header', $data);
		$this->view('Pembayaran/tambah',$data);
		$this->view('home_index/footer');
	}
	public function donasi()
	{
		$data['judul'] = 'Donasi - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['mesjid'] = $this->model('Web_model')->getAllZakat();
		$data['pnr'] = $this->model('Donasi_model')->getAllDonasi();
		$this->view('templates/header_web', $data);
		$this->view('web/donasi', $data);
		$this->view('templates/footer_web');
	}

	public function selesaiDonasi()
	{
		$data['judul'] = 'Selesai Donasi - Zakat';
		
		$this->view('templates/header_web', $data);
		$this->view('web/selesai_donasi', $data);
		$this->view('templates/footer_web');
	}

	public function aksi_tambah_donasi(){
		if($this->model('Web_model')->simpanDonasi($_POST) > 0) {
			header('Location:' . BASEURL .'/Web/selesaiDonasi');
			exit;
		}
	}


	public function contact()
	{
		$data['judul'] = 'Contact - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('templates/header_web', $data);
		$this->view('web/contact', $data);
		$this->view('templates/footer_web');
	}

	public function aksi_tambah_contact(){
		if($this->model('Web_model')->tambahContact($_POST) > 0) {
			header('Location:' . BASEURL .'/Web/contact');
			exit;
		}
	}

	public function lihat_contact()
	{
		$data['judul'] = 'Lihat Contact - Zakat';
		$data['pnr'] = $this->model('Web_model')->getAllContact();

		$this->view('home_index/header', $data);
		$this->view('web/lihat_contact', $data);
		$this->view('home_index/footer');
	}
}