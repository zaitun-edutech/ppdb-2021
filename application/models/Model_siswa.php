<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model{

	function base_biodata($sess)
	{
		return $this->db->get_where('tbl_siswa', "no_pendaftaran='$sess'")->row();
	}

	function get_fy()
	{
		return $this->db->get_where('tbl_web', "id_web=1")->row()->tapel;
	}

	function get_print($menu = '', $data = '')
	{
		switch ($menu) {
			case 'study-report':
				return $this->db->select_sum('rata_rata_nilai')->get_where('tbl_rapor', "no_pendaftaran='$data'")->row();
				break;

			case 'schtest-val':
				return $this->db->select_sum('nilai_usbn')->get_where('tbl_nilai_usbn', "no_pendaftaran='$data'")->row();
				break;

			case 'nattest-val':
				return $this->db->select_sum('nilai_unbk')->get_where('tbl_nilai_unbk', "no_pendaftaran='$data'")->row();
				break;

			case 'passed':
				return $this->db->like('tgl_siswa', date('Y'), 'after')->get_where('tbl_siswa', "no_pendaftaran='$data'")->row();
				break;

			case 'announcement':
				return $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();
				break;
			
			default:
				# code...
				break;
		}
	}

	function get_val($type, $sess, $subject)
	{
		switch ($type) {
			case 'rapor':
				$this->db->get_where('tbl_rapor', array('no_pendaftaran' => $sess, "mapel" => $subject))->row();
				break;

			case 'usbn':
				return $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $sess, "mapel_usbn" => $subject))->row();
				break;

			case 'unbk':
				return $this->db->get_where('tbl_nilai_unbk', array('no_pendaftaran' => $sess, "mapel_unbk" => $subject))->row();
				break;
			
			default:
				# code...
				break;
		}
	}

   function statistik_data()
   {

   }

}
?>
