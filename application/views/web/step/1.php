<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;"><?php echo $user['nama_lengkap']; ?></strong></h2>
    <span style="font-size:30px;"> Tahun Pelajaran <b><?php echo date('Y'); ?>-<?php echo date('Y')+1; ?></b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <ol style="color:#333;">

      <li>Setiap calon peserta didik wajib mengisi form pendaftaran dengan lengkap. </li>

      <li>Data-data yang diisikan pada form PPDB Online harus sesuai dengan data asli dan benar adanya.</li>

      <li>Calon peserta didik yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB <?php echo $user['nama_lengkap']; ?>.  </li>

      <li>Calon peserta didik yang sudah mendaftarkan diri melalui PPDB Online <?php echo $user['nama_lengkap']; ?> akan mendapatkan nomor pendaftaran dan password yang nantinya akan digunakan untuk akses informasi yang berkaitan dengan PPDB <?php echo $user['nama_lengkap']; ?>.</li>

      <li>Calon peserta didik yang sudah mendaftarakan diri melalui PPDB Online <?php echo $user['nama_lengkap']; ?> wajib menyerahkan dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB.</li>

      <li>Setiap calon peserta didik yang mendaftar wajib mengikuti tes seleksi yang diadakan oleh panitia PPDB <?php echo $user['nama_lengkap']; ?>.</li>

      <li>Data yang sudah diberikan oleh Panitia PPDB <?php echo $user['nama_lengkap']; ?> hanya digunakan untuk keperluan penerimaan peserta didik baru. <strong class="text-danger">Data yang dikirimkan akan dijaga kerahasiaannya dan tidak akan dipublikasikan oleh Panita PPDB</strong>.</li>

    </ol>

  </div>
</div>
