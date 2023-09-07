

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt" || $mode == "act_set") {
	$act			= "act_edt";
	
	$idp			= $datpil->id;
	$nip			= $datpil->nip; 
	$nama			= $datpil->nama; 
	$skpd			= $datpil->skpd; 
	$jurusan		= $datpil->jurusan;
	$ttl			= $datpil->ttl; 
	$jenkel			= $datpil->jenkel; 
	$pangkat		= $datpil->pangkat; 
	$golru			= $datpil->golru; 
	$pendid			= $datpil->pendid; 
	$jabatan		= $datpil->jabatan; 
	$unit_kerja		= $datpil->unit_kerja;
	$no_surat		= $datpil->no_surat;
	$tgl_surat		= $datpil->tgl_surat;
	$jenslks		= $datpil->jenslks;
	
		
} else {
	$nip			=  ""; 
	$nama			=  ""; 
	$skpd			=  ""; 
	$jurusan		=  "";
	$ttl			=  ""; 
	$jenkel			=  ""; 
	$idjenjab		=  "";
	$pendid			=  "";
	$pangkat		=  ""; 
	$gol			=  ""; 
	$golru			=  "";
	$jabatan		=  ""; 
	$act			="add2";
	$idp			= "";
	$unit_kerja		= ""; 
	$jenslks		=""; 
	$no_surat		="";
	$tgl_surat		="";
	$tgl_pens			="";
	
}

?>
<div class="navbar navbar-inverse"style="background-color:#3CB371;">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Usul slks</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	<?php
	
	

	echo $this->session->flashdata("k");
	if($act=="add2"){
	
	?>
	<form action="<?=base_URL()?>admin/slks/add2" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table  class="table-form">
		<tr><td width="150%" align="right"><b>Masukkan 18 digit N I P</b></td><td></td><td></td><td><b><input type="text" name="nip" id="nip" required value="<?php echo $nip; ?>" style="width: 300px" class="form-control"></b></td>
		<td><button type="submit" class="btn btn-primary">Cari Pegawai</button></td>
		</tr>
	</table>
	</form>
	<?php
	}
	?>
	<form action="<?=base_URL()?>admin/slks/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table>
		<input type="hidden" name="nip" value="<?php echo $nip; ?>">
		<tr><td width="150%">Nama Pegawai</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" id="nama" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">N I P</td><td><b><input type="text" name="nip" required value="<?php echo $nip; ?>" id="nip" style="width: 300px" readonly class="form-control">
		<tr><td width="150%">Pangkat </td><td><b><input type="text" name="pangkat" required value="<?php echo $pangkat; ?>" id="pangkat" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">Golongan </td><td><b><input type="text" name="golru" required value="<?php echo $golru; ?>" id="golru" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">Pendidikan </td><td><b><input type="text" name="jurusan" required value="<?php echo $jurusan; ?>" id="jurusan" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">Jabatan </td><td><b><input type="text" name="jabatan" required value="<?php echo $jabatan; ?>" id="jabatan" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">Unit Kerja </td><td><b><input type="text" name="unit_kerja" required value="<?php echo $unit_kerja; ?>" id="unit_kerja" style="width: 300px" readonly class="form-control"></b></td></tr>
		
		</table>
	</div>
	
	<div class="col-lg-6">	
		<table  class="table-form">
		<tr><td width="30%">Nomor Surat</td><td><b><input type="text" name="no_surat" required value="<?php echo $no_surat; ?>" style="width: 300px" class="form-control"></td></tr>
		<tr><td width="30%">Tanggal Surat</td><td><b><input type="text" name="tgl_surat" required value="<?php echo $tgl_surat; ?>" id="tgl_surat" style="width: 150px" class="form-control"></b></td></tr>
		<tr><td width="30%">Jenis slks</td><td><select name="jenslks" class="form-control" style="width: 150px" required><option value="<?php echo $jenslks;?>"> - Jenis slks - </option>
			<?php
				$jpen	= $this->db->query("SELECT * FROM a_jenslks")->result();
				
				foreach ($jpen as $e) {
					if ($e->jenpens == $jenslks) {
						echo "<option selected value='".$e->idjenpens."'>".$e->jenpens."</option>";
					} else {
						echo "<option value='".$e->jenpens."'>".$e->jenpens."</option>";
					}				
				}
			
			?>			
			</select>
		</td></tr>
				
		
		<tr><td colspan="2">
		<?php
		if($nama!=''){
		echo	"<br><button type='submit' class='btn btn-primary'>Simpan</button>";
		}
		?>
		<button type="reset" class="btn btn-info">Reset</button>
		<a href="<?=base_URL()?>admin/slks" class="btn btn-success">Kembali</a>
		</td></tr>
		
		</table>	
	</div>

	</div>
	
	</form>
