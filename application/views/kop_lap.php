<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$id = $this->db->get('tbl_user')->row_array();
?>

<table border="0" width="100%">
  <tr>
    <td align="center">
      <img src="img/logo2.png" alt="logo2" width="70">
    </td>
    <td align="center">
      <b style="font-size:23px;">PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB)</b> <br>
      <b style="font-size:30px;"><?php echo $id['nama_lengkap']; ?></b> <br>
      <b style="font-size:20px;">TAHUN PELAJARAN <?php echo $id['th_pelajaran']; ?></b>
    </td>
   <td align="center">
      <img src="img/logo.png" alt="logo2" width="70">
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center" style="font-size:15px;">
      Sekretariat : <?php echo $id['alamat']; ?> <img src="img/telp.jpg" alt="telp." style="margin-bottom:-5px;margin-right:-5px;"> <?php echo $id['telp']; ?>
      <br>
      Website : <?php echo $id['email']; ?>  E-mail : <?php echo $id['email']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
      <hr size="2" color="black" style="margin:0px;">
    </td>
  </tr>
</table>
