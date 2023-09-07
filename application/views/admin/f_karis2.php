

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
	$gol			= $datpil->gol; 
	$jabatan		= $datpil->jabatan; 
	$nm_pasangan			= $datpil->nm_pasangan; 
	$pekerjaan		= $datpil->pekerjaan; 
	$tkpendid		= $datpil->tkpendid; 
	$pendid			= $datpil->pendid; 
	$unit_kerja		= $datpil->unit_kerja;
	$no_surat		= $datpil->no_surat;
	$tgl_surat		= $datpil->tgl_surat;
	$jenkaris			= $datpil->jenkaris; 



	
		
} else {
	$act			="act_add";
	$idp			= "";
	$nip			= $datpiltemp->nip; 
	$nama			= $datpiltemp->nama; 
	$skpd			= $datpiltemp->skpd; 
	$jurusan		= $datpiltemp->jurusan;
	$ttl			= $datpiltemp->ttl; 
	$jenkel			= $datpiltemp->jenkel; 
	$idjenjab		= $datpiltemp->idjenjab;
	$pangkat		= $datpiltemp->pangkat; 
	$gol			= $datpiltemp->idgolrupkt; 
	$golru			= $datpiltemp->golru;
	$jabatan		= $datpiltemp->jabatan; 
	$nm_pasangan	= "";
	$pekerjaan		= ""; 
	$klas			= $datpiltemp->klasjab;
	$tkpendid		= $datpiltemp->tkpendid; 
	$pendid			= $datpiltemp->pendid; 
	$unit_kerja		= $datpiltemp->unit_kerja;
	$kode_skpd		= $datpiltemp->kode_skpd; 
	$jenkaris		=""; 
	$no_surat		="";
	$tgl_surat		="";
	


	
	
}

?>
<div class="navbar navbar-inverse"style="background-color:#3CB371;">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Usul Karis/Karsu</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	<?php
	
	

	echo $this->session->flashdata("k");
	
	?>
<tr></tr><tr></tr>
	
	<form action="<?=base_URL()?>admin/karis/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	<input type="hidden" name="kode_skpd" value="<?php echo $kode_skpd; ?>">
	<input type="hidden" name="skpd" value="<?php echo $skpd; ?>">
	<input type="hidden" name="ttl" value="<?php echo $ttl; ?>">
	<input type="hidden" name="tkpendid" value="<?php echo $tkpendid; ?>">
	<input type="hidden" name="pendid" value="<?php echo $pendid; ?>">
	<input type="hidden" name="gol" value="<?php echo $gol; ?>">
	<input type="hidden" name="idjenjab" value="<?php echo $idjenjab; ?>">
	
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table>
		<input type="hidden" name="nip" value="<?php echo $nip; ?>">
		<tr><td width="150%">Nama Pegawai</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" id="nama" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">N I P</td><td><b><input type="text" name="nip" required value="<?php echo $nip; ?>" id="nip" style="width: 300px" readonly class="form-control">
		<tr><td width="150%">Jenis Kelamin</td><td><b><input type="text" name="jenkel" required value="<?php echo $jenkel; ?>" id="jenkel" style="width: 300px" readonly class="form-control">
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
		<tr><td width="30%">Jenis Kartu</td><td><select name="jenkaris" class="form-control" style="width: 150px" required><option value="<?php echo $jenkaris;?>"> - Kategori - </option>
			<?php
				$jpen	= $this->db->query("SELECT * FROM a_jenkaris")->result();
				
				foreach ($jpen as $e) {
						echo "<option value='".$e->jenpens."'>".$e->jenpens."</option>";
									
				}
			
			?>			
			</select>
		</td></tr>
		<tr><td width="150%">Nama Suami/Isteri</td><td><b><input type="text" name="nm_pasangan" required value="<?php echo $nm_pasangan; ?>" id="tgl_surat" style="width: 150px" class="form-control"></b></td></tr>
		<tr><td width="150%">Pekerjaan Suami/Isteri</td><td><b><input type="text" name="pekerjaan" required value="<?php echo $pekerjaan; ?>" id="tgl_surat" style="width: 150px" class="form-control"></b></td></tr>
	
		
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-info">Reset</button>
		<a href="<?=base_URL()?>admin/karis" class="btn btn-success">Kembali</a>
		</td></tr>
		
		</table>	
	</div>

	</div>
	
	</form>
