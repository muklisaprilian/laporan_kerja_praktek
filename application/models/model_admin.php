<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function tampil_agenda_surat_masuk()
	{
		return $this->db->get('tb_agenda_surat_masuk');
	}

	public function tampil_amprahan()
	{
		return $this->db->get('tb_amprahan');
	}

	public function tampil_nomor_jaminan()
	{
		return $this->db->get('tb_nomor_jaminan');
	}

	public function tampil_struktur_organisasi()
	{
		return $this->db->get('tb_struktur_organisasi');
	}

	public function tampil_amandemen_i()
	{
		return $this->db->get('tb_amandemen_i');
	}

	public function tampil_amandemen_ii()
	{
		return $this->db->get('tb_amandemen_ii');
	}

	public function tampil_pho()
	{
		return $this->db->get('tb_pho');
	}

	public function hapus_agenda_surat_masuk($id)
	{
		return $this->db->delete('tb_agenda_surat_masuk', array('agenda_surat_masuk_id' => $id));
	}

	public function hapus_amprahan($id)
	{
		return $this->db->delete('tb_amprahan', array('amprahan_id' => $id));
	}

	public function hapus_nomor_jaminan($id)
	{
		return $this->db->delete('tb_nomor_jaminan', array('nomor_jaminan_id' => $id));
	}

	public function hapus_struktur_organisasi($id)
	{
		return $this->db->delete('tb_struktur_organisasi', array('struktur_organisasi_id' => $id));
	}

	public function hapus_amandemen_i($id)
	{
		return $this->db->delete('tb_amandemen_i', array('amandemen_i_id' => $id));
	}

	public function hapus_amandemen_ii($id)
	{
		return $this->db->delete('tb_amandemen_ii', array('amandemen_ii_id' => $id));
	}

	public function hapus_pho($id)
	{
		return $this->db->delete('tb_pho', array('pho_id' => $id));
	}

}
