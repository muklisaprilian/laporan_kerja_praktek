<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function index(){
		$a['agenda_surat_masuk']	= $this->model_admin->tampil_agenda_surat_masuk()->num_rows();
		$a['amprahan']	= $this->model_admin->tampil_amprahan()->num_rows();
		$a['nomor_jaminan']	= $this->model_admin->tampil_nomor_jaminan()->num_rows();
		$a['struktur_organisasi']	= $this->model_admin->tampil_struktur_organisasi()->num_rows();
		$a['amandemen_i']	= $this->model_admin->tampil_amandemen_i()->num_rows();
		$a['amandemen_ii']	= $this->model_admin->tampil_amandemen_ii()->num_rows();
		$a['pho']	= $this->model_admin->tampil_pho()->num_rows();
		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_admin');
	}

		/* Fungsi Agenda Surat Masuk */
	function agenda_surat_masuk(){
		$a['data']	= $this->model_admin->tampil_agenda_surat_masuk()->result_object();
		$a['page']	= "agenda_surat_masuk";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_agenda_surat_masuk(){
		$a['page']	= "tambah_agenda_surat_masuk";
		
		$this->load->view('admin/index', $a);
	}

	function insert_agenda_surat_masuk(){

		$id = $this->input->post('id');
		$uraian = $this->input->post('uraian');
		$asal = $this->input->post('asal');
		$tgl = $this->input->post('tgl');
		$ket = $this->input->post('ket');
		$object = array(
				'agenda_surat_masuk_id' => $id,
				'uraian' => $uraian,
				'asal_surat' => $asal,
				'tgl_masuk' => $tgl,
				'ket' => $ket
			);
		$this->db->insert('tb_agenda_surat_masuk', $object);

		redirect('admin/agenda_surat_masuk','refresh');
	}

	function edit_agenda_surat_masuk($id){
		$a['editdata']	= $this->db->get_where('tb_agenda_surat_masuk',array('agenda_surat_masuk_id'=>$id))->result_object();		
		$a['page']	= "edit_agenda_surat_masuk";
		
		$this->load->view('admin/index', $a);
	}

	function update_agenda_surat_masuk(){
		$id = $this->input->post('id');
		$uraian = $this->input->post('uraian');
		$asal = $this->input->post('asal');
		$tgl = $this->input->post('tgl');
		$ket = $this->input->post('ket');
		$object = array(
				'agenda_surat_masuk_id' => $id,
				'uraian' => $uraian,
				'asal_surat' => $asal,
				'tgl_masuk' => $tgl,
				'ket' => $ket
			);
		$this->db->where('agenda_surat_masuk_id', $id);
		$this->db->update('tb_agenda_surat_masuk', $object); 

		redirect('admin/agenda_surat_masuk','refresh');
	}

	function hapus_agenda_surat_masuk($id){
		
		$this->model_admin->hapus_agenda_surat_masuk($id);
		redirect('admin/agenda_surat_masuk','refresh');
	}

		/* Fungsi Amprahan */
	function amprahan(){
		$a['data']	= $this->model_admin->tampil_amprahan()->result_object();
		$a['page']	= "amprahan";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_amprahan(){
		$a['page']	= "tambah_amprahan";
		
		$this->load->view('admin/index', $a);
	}

	function insert_amprahan(){

		$id = $this->input->post('id');
		$agenda_surat_masuk_id = $this->input->post('agenda_surat_masuk_id');
		$nama = $this->input->post('nama');
		$nilai = $this->input->post('nilai');
		$nomor = $this->input->post('nomor');
		$name = $this->input->post('name');
		$direktur = $this->input->post('direktur');
		$no = $this->input->post('no');
		$kop = $this->input->post('kop');
		$galian = $this->input->post('galian');
		$jamsostek = $this->input->post('jamsostek');
		$object = array(
				'amprahan_id' => $id,
				'agenda_surat_masuk_id' => $agenda_surat_masuk_id,
				'nama_paket' => $nama,
				'nilai_kontrak' => $nilai,
				'nomor_kontrak' => $nomor,
				'nama_perusahaan' => $name,
				'direktur' => $direktur,
				'no_npwp' => $no,
				'kop_cirut' => $kop,
				'galian_c' => $galian,
				'jamsostek' => $jamsostek
			);
		$this->db->insert('tb_amprahan', $object);

		redirect('admin/amprahan','refresh');
	}

	function edit_amprahan($id){
		$a['editdata']	= $this->db->get_where('tb_amprahan',array('amprahan_id'=>$id))->result_object();		
		$a['page']	= "edit_amprahan";
		
		$this->load->view('admin/index', $a);
	}

	function update_amprahan(){
		$id = $this->input->post('id');
		$agenda_surat_masuk_id = $this->input->post('agenda_surat_masuk_id');
		$nama = $this->input->post('nama');
		$nilai = $this->input->post('nilai');
		$nomor = $this->input->post('nomor');
		$name = $this->input->post('name');
		$direktur = $this->input->post('direktur');
		$no = $this->input->post('no');
		$kop = $this->input->post('kop');
		$galian = $this->input->post('galian');
		$jamsostek = $this->input->post('jamsostek');
		$object = array(
				'amprahan_id' => $id,
				'agenda_surat_masuk_id' => $agenda_surat_masuk_id,
				'nama_paket' => $nama,
				'nilai_kontrak' => $nilai,
				'nomor_kontrak' => $nomor,
				'nama_perusahaan' => $name,
				'direktur' => $direktur,
				'no_npwp' => $no,
				'kop_cirut' => $kop,
				'galian_c' => $galian,
				'jamsostek' => $jamsostek
			);
		$this->db->where('amprahan_id', $id);
		$this->db->update('tb_amprahan', $object); 

		redirect('admin/amprahan','refresh');
	}

	function hapus_amprahan($id){
		
		$this->model_admin->hapus_amprahan($id);
		redirect('admin/amprahan','refresh');
	}
		

		/* Fungsi Nomor Jaminan */
	function nomor_jaminan(){
		$a['data']	= $this->model_admin->tampil_nomor_jaminan()->result_object();
		$a['page']	= "nomor_jaminan";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_nomor_jaminan(){
		$a['page']	= "tambah_nomor_jaminan";
		
		$this->load->view('admin/index', $a);
	}

	function insert_nomor_jaminan(){

		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$pelaksanaan = $this->input->post('pelaksanaan');
		$uang = $this->input->post('uang');
		$pemeliharaan = $this->input->post('pemeliharaan');
		$object = array(
				'nomor_jaminan_id' => $id,
				'amprahan_id' => $amprahan_id,
				'pelaksanaan' => $pelaksanaan,
				'uang_muka' => $uang,
				'pemeliharaan' => $pemeliharaan
			);
		$this->db->insert('tb_nomor_jaminan', $object);

		redirect('admin/nomor_jaminan','refresh');
	}

	function edit_nomor_jaminan($id){
		$a['editdata']	= $this->db->get_where('tb_nomor_jaminan',array('nomor_jaminan_id'=>$id))->result_object();		
		$a['page']	= "edit_nomor_jaminan";
		
		$this->load->view('admin/index', $a);
	}

	function update_nomor_jaminan(){
		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$pelaksanaan = $this->input->post('pelaksanaan');
		$uang = $this->input->post('uang');
		$pemeliharaan = $this->input->post('pemeliharaan');
		$object = array(
				'nomor_jaminan_id' => $id,
				'amprahan_id' => $amprahan_id,
				'pelaksanaan' => $pelaksanaan,
				'uang_muka' => $uang,
				'pemeliharaan' => $pemeliharaan
			);
		$this->db->where('nomor_jaminan_id', $id);
		$this->db->update('tb_nomor_jaminan', $object); 

		redirect('admin/nomor_jaminan','refresh');
	}

	function hapus_nomor_jaminan($id){
		
		$this->model_admin->hapus_nomor_jaminan($id);
		redirect('admin/nomor_jaminan','refresh');
	}


	/* Fungsi Struktur Organisasi */
	function struktur_organisasi(){
		$a['data']	= $this->model_admin->tampil_struktur_organisasi()->result_object();
		$a['page']	= "struktur_organisasi";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_struktur_organisasi(){
		$a['page']	= "tambah_struktur_organisasi";
		
		$this->load->view('admin/index', $a);
	}

	function insert_struktur_organisasi(){

		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$kpa = $this->input->post('kpa');
		$pptk = $this->input->post('pptk');
		$pembantu = $this->input->post('pembantu');
		$pengawas = $this->input->post('pengawas');
		$no = $this->input->post('no');
		$object = array(
				'struktur_organisasi_id' => $id,
				'amprahan_id' => $amprahan_id,
				'kpa' => $kpa,
				'pptk' => $pptk,
				'pembantu_pptk' => $pembantu,
				'pengawas' => $pengawas,
				'no_sk' => $no
			);
		$this->db->insert('tb_struktur_organisasi', $object);

		redirect('admin/struktur_organisasi','refresh');
	}

	function edit_struktur_organisasi($id){
		$a['editdata']	= $this->db->get_where('tb_struktur_organisasi',array('struktur_organisasi_id'=>$id))->result_object();		
		$a['page']	= "edit_struktur_organisasi";
		
		$this->load->view('admin/index', $a);
	}

	function update_struktur_organisasi(){
		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$kpa = $this->input->post('kpa');
		$pptk = $this->input->post('pptk');
		$pembantu = $this->input->post('pembantu');
		$pengawas = $this->input->post('pengawas');
		$no = $this->input->post('no');
		$object = array(
				'struktur_organisasi_id' => $id,
				'amprahan_id' => $amprahan_id,
				'kpa' => $kpa,
				'pptk' => $pptk,
				'pembantu_pptk' => $pembantu,
				'pengawas' => $pengawas,
				'no_sk' => $no
			);
		$this->db->where('struktur_organisasi_id', $id);
		$this->db->update('tb_struktur_organisasi', $object); 

		redirect('admin/struktur_organisasi','refresh');
	}

	function hapus_struktur_organisasi($id){
		
		$this->model_admin->hapus_struktur_organisasi($id);
		redirect('admin/struktur_organisasi','refresh');
	}


		/* Fungsi Amandemen I */
	function amandemen_i(){
		$a['data']	= $this->model_admin->tampil_amandemen_i()->result_object();
		$a['page']	= "amandemen_i";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_amandemen_i(){
		$a['page']	= "tambah_amandemen_i";
		
		$this->load->view('admin/index', $a);
	}

	function insert_amandemen_i(){

		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tgl = $this->input->post('tgl');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'amandemen_i_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tgl_i' => $tgl,
				'tim_mc' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->insert('tb_amandemen_i', $object);

		redirect('admin/amandemen_i','refresh');
	}

	function edit_amandemen_i($id){
		$a['editdata']	= $this->db->get_where('tb_amandemen_i',array('amandemen_i_id'=>$id))->result_object();		
		$a['page']	= "edit_amandemen_i";
		
		$this->load->view('admin/index', $a);
	}

	function update_amandemen_i(){
		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tgl = $this->input->post('tgl');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'amandemen_i_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tgl_i' => $tgl,
				'tim_mc' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->where('amandemen_i_id', $id);
		$this->db->update('tb_amandemen_i', $object); 

		redirect('admin/amandemen_i','refresh');
	}

	function hapus_amandemen_i($id){
		
		$this->model_admin->hapus_amandemen_i($id);
		redirect('admin/amandemen_i','refresh');
	}


			/* Fungsi Amandemen II */
	function amandemen_ii(){
		$a['data']	= $this->model_admin->tampil_amandemen_ii()->result_object();
		$a['page']	= "amandemen_ii";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_amandemen_ii(){
		$a['page']	= "tambah_amandemen_ii";
		
		$this->load->view('admin/index', $a);
	}

	function insert_amandemen_ii(){

		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tanggal = $this->input->post('tanggal');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'amandemen_ii_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tanggal' => $tanggal,
				'tim_mc' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->insert('tb_amandemen_ii', $object);

		redirect('admin/amandemen_ii','refresh');
	}

	function edit_amandemen_ii($id){
		$a['editdata']	= $this->db->get_where('tb_amandemen_ii',array('amandemen_ii_id'=>$id))->result_object();		
		$a['page']	= "edit_amandemen_ii";
		
		$this->load->view('admin/index', $a);
	}

	function update_amandemen_ii(){
		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tanggal = $this->input->post('tanggal');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'amandemen_ii_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tanggal' => $tanggal,
				'tim_mc' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->where('amandemen_ii_id', $id);
		$this->db->update('tb_amandemen_ii', $object); 

		redirect('admin/amandemen_ii','refresh');
	}

	function hapus_amandemen_ii($id){
		
		$this->model_admin->hapus_amandemen_ii($id);
		redirect('admin/amandemen_ii','refresh');
	}


			/* Fungsi PHO */
	function pho(){
		$a['data']	= $this->model_admin->tampil_pho()->result_object();
		$a['page']	= "pho";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_pho(){
		$a['page']	= "tambah_pho";
		
		$this->load->view('admin/index', $a);
	}

	function insert_pho(){

		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tanggal = $this->input->post('tanggal');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'pho_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tanggal' => $tanggal,
				'tim_pho' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->insert('tb_pho', $object);

		redirect('admin/pho','refresh');
	}

	function edit_pho($id){
		$a['editdata']	= $this->db->get_where('tb_pho',array('pho_id'=>$id))->result_object();		
		$a['page']	= "edit_pho";
		
		$this->load->view('admin/index', $a);
	}

	function update_pho(){
		$id = $this->input->post('id');
		$amprahan_id = $this->input->post('amprahan_id');
		$nomor = $this->input->post('nomor');
		$tanggal = $this->input->post('tanggal');
		$tim = $this->input->post('tim');
		$ketua = $this->input->post('ketua');
		$sekretaris = $this->input->post('sekretaris');
		$anggota = $this->input->post('anggota');
		$no = $this->input->post('no');
		$object = array(
				'pho_id' => $id,
				'amprahan_id' => $amprahan_id,
				'nomor' => $nomor,
				'tanggal' => $tanggal,
				'tim_pho' => $tim,
				'ketua' => $ketua,
				'sekretaris' => $sekretaris,
				'anggota' => $anggota,
				'no_sk' => $no
			);
		$this->db->where('pho_id', $id);
		$this->db->update('tb_pho', $object); 

		redirect('admin/pho','refresh');
	}

	function hapus_pho($id){
		
		$this->model_admin->hapus_pho($id);
		redirect('admin/pho','refresh');
	}
	
}

