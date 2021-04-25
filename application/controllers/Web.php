<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['web_ppdb']	 = $this->web->web_utama();
		$this->load->view('web/index', $data);
	}

	public function idbaru($value='')
	{
		echo $this->web->pendaftaran('id_baru');
	}

	public function pendaftaran()
	{
		$data = array(
			'id_daftar'			=> $this->web->pendaftaran('id_baru'),
			'web_ppdb'			=> $this->web->pendaftaran('status_ppdb'),
			'v_pdd'				=> $this->web->pendaftaran('v_pdd'),
			'v_penghasilan'		=> $this->web->pendaftaran('v_penghasilan'),
			'v_pekerjaan_ayah'	=> $this->web->pendaftaran('v_pekerjaan_ayah'),
			'v_komp'			=> $this->web->pendaftaran('v_komp'),
			'v_pekerjaan_ibu'	=> $this->web->pendaftaran('v_pekerjaan_ibu'),
			'v_pekerjaan_wali'	=> $this->web->pendaftaran('v_pekerjaan_wali')
		);

		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			// var_dump($this->input->post()); exit();
			$acts = $this->web->pendaftaran('daftar', $this->input);
			// 

			$this->session->set_userdata('no_pendaftaran', $this->input->post('nis'));
			redirect('panel_siswa');

			/* $nis							= $this->input->post('nis');
			$nisn							= $this->input->post('nisn');
			$nik							= $this->input->post('nik');
			$nama_lengkap			= ;
			$jk								= ;
			$tempat_lahir			= ;
			$tgl_lahir				= ;
			$agama						= ;
			$status_keluarga	= $this->input->post('status_keluarga');
			$alamat_siswa			= ;
			$no_hp_siswa			= ;
			$nama_ayah				= ;
			$pdd_ayah					= $this->input->post('pdd_ayah');
			$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
			$penghasilan_ayah	= $this->input->post('penghasilan_ayah');
			$no_hp_ayah				= $this->input->post('no_hp_ayah');
			$nama_ibu					= ;
			$pdd_ibu					= $this->input->post('pdd_ibu');
			$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
			$penghasilan_ibu	= $this->input->post('penghasilan_ibu');
			$no_hp_ibu				= $this->input->post('no_hp_ibu');
			$nama_wali				= ;
			$pdd_wali					= $this->input->post('pdd_wali');
			$pekerjaan_wali		= $this->input->post('pekerjaan_wali');
			$penghasilan_wali	= $this->input->post('penghasilan_wali');
			$no_hp_wali				= $this->input->post('no_hp_wali');
			$npsn							= $this->input->post('npsn');
			$nama_sekolah			= ;
			$status_sekolah		= $this->input->post('status_sekolah');
			$model_un					= $this->input->post('model_un');
			$alamat_sekolah		= $this->input->post('alamat_sekolah');
			$thn_lulus				= $this->input->post('thn_lulus');
			$rayonisasi				= $this->input->post('rayonisasi');
			$tgl_siswa				= $this->Model_data->date('waktu_default');

			if ($_POST['total_nilai'] < 75) {
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-warning alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Gagal Mendaftar PPDB Online!</strong> Maaf <b>'.$nama_lengkap.'</b> tidak bisa mendaftar PPDB dikarenakan Total nilai Rata-Rata Rapor kurang dari 75. Terimakasih.
					</div>'
				);
				redirect('pendaftaran');
			}

					

					for ($i=1; $i <=5 ; $i++) {
						if ($i == 1) {
							$mapel = 'Ilmu Pengetahuan Alam (IPA)';
							$smstr = 'ipa';
						}elseif ($i == 2) {
							$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
							$smstr = 'ips';
						}elseif ($i == 3) {
							$mapel = 'Matematika';
							$smstr = 'mtk';
						}elseif ($i == 4) {
							$mapel = 'Bahasa Indonesia';
							$smstr = 'ind';
						}elseif ($i == 5) {
							$mapel = 'Bahasa Inggris';
							$smstr = 'ing';
						}
						$data2 = array(
							'mapel'				 		=> $mapel,
							'semester1'		 		=> $this->input->post($smstr."1"),
							'semester2'				=> $this->input->post($smstr."2"),
							'semester3'				=> $this->input->post($smstr."3"),
							'semester4'				=> $this->input->post($smstr."4"),
							'semester5'				=> $this->input->post($smstr."5"),
							'rata_rata_nilai'	=> $this->input->post("nilai_".$smstr),
							'no_pendaftaran'	=> $no_pendaftaran
						);
						$this->db->insert('tbl_rapor',$data2);
					}

					for ($i=1; $i <=7 ; $i++) {
						if ($i == 1) {
							$mapel = 'Pendidikan Agama';
							$nilai = 'agama';
						}elseif ($i == 2) {
							$mapel = 'PKN';
							$nilai = 'pkn';
						}elseif ($i == 3) {
							$mapel = 'Bahasa Indonesia';
							$nilai = 'ind';
						}elseif ($i == 4) {
							$mapel = 'Bahasa Inggris';
							$nilai = 'ing';
						}elseif ($i == 5) {
							$mapel = 'Matematika';
							$nilai = 'mtk';
						}elseif ($i == 6) {
							$mapel = 'Ilmu Pengetahuan Alam (IPA)';
							$nilai = 'ipa';
						}elseif ($i == 7) {
							$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
							$nilai = 'ipa';
						}
						$data3 = array(
							'mapel_usbn'			=> $mapel,
							'nilai_usbn'			=> $this->input->post("usbn_".$nilai),
							'no_pendaftaran'	=> $no_pendaftaran
						);
						$this->db->insert('tbl_nilai_usbn',$data3);
					}

					for ($i=1; $i <=4 ; $i++) {
						if ($i == 1) {
							$mapel = 'Ilmu Pengetahuan Alam (IPA)';
							$nilai = 'ipa';
						}elseif ($i == 2) {
							$mapel = 'Matematika';
							$nilai = 'mtk';
						}elseif ($i == 3) {
							$mapel = 'Bahasa Indonesia';
							$nilai = 'ind';
						}elseif ($i == 4) {
							$mapel = 'Bahasa Inggris';
							$nilai = 'ing';
						}
						$data4 = array(
							'mapel_unbk'			=> $mapel,
							'nilai_unbk'			=> $this->input->post("unbk_".$nilai),
							'no_pendaftaran'	=> $no_pendaftaran
						);
						$this->db->insert('tbl_nilai_unbk',$data4);
					}

						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil ditambahkan.
							</div>'
						); */
						

		}


	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->web->pendaftaran('status_ppdb');
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		if ($this->session->userdata('no_pendaftaran') != NULL) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/index', $data);

			if (isset($_POST['btnlogin'])) {
				$send = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$auth = $this->web->auth('cek-masuk', $send);

				if($auth['sum'] == 0) {
					$this->session->set_flashdata('msg', $this->err->wrong_auth());
					redirect('logcs');
				} else {
					$this->session->set_userdata('no_pendaftaran', $auth['res']->no_pendaftaran);
					redirect('panel_siswa');
				}
			}
		}
	}

	public function cari()
	{
		$data['siswa'] = $this->SiswaModel->view();
		$this->load->view('web/cari', $data);
	}


	function error_not_found(){
		$this->load->view('404_content');
	}

}
