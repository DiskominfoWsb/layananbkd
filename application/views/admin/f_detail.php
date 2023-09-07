

<?php

	$idp			= $datpil->id;
	$nip			= $datpil->nip; 
	$nama			= $datpil->nama; 
	$jabatan		= $datpil->jabatan; 
	$skpd			= $datpil->skpd; 
	$jenkaris		= $datpil->jenkaris;
	$gol			= $datpil->gol;	
	$pendid			= $datpil->pendid;
	$nm_pasangan	= $datpil->nm_pasangan;	
	$pekerjaan		= $datpil->pekerjaan;
	$bkd			= $datpil->bkd;
	$s_sk			= $datpil->s_sk;
	$keterangan		= $datpil->keterangan;
	

?>
<div class="navbar navbar-inverse"style="background-color:#3CB371;">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Upload Berkas SLKS</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	<?php
	
	

	echo $this->session->flashdata("k");
	
	?>

	
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table>
		<tr><td width="150%">Nama Pegawai</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" id="nama" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="150%">N I P</td><td><b><input type="text" name="nip" required value="<?php echo $nip; ?>" id="nip" style="width: 300px" readonly class="form-control">
		<tr><td width="30%">Jenis Kartu</td><td><select name="jenkaris" class="form-control" style="width: 150px" readonly required><option value="<?php echo $jenkaris;?>"> - Kategori - </option>
			<?php
				$jpen	= $this->db->query("SELECT * FROM a_jenkaris")->result();
				
				foreach ($jpen as $e) {
					if ($e->jenpens == $jenkaris) {
						echo "<option selected value='".$e->idjenpens."'>".$e->jenpens."</option>";
					} else {
						echo "<option value='".$e->jenpens."'>".$e->jenpens."</option>";
					}				
				}
			
			?>			
			</select>
		</td></tr>

		<tr><td width="150%">Nama Suami/Isteri</td><td><b><input type="text" name="nm_pasangan" readonly required value="<?php echo $nm_pasangan; ?>" id="tgl_surat" style="width: 150px" class="form-control"></b></td></tr>
		<tr><td width="150%">Pekerjaan Suami/Isteri</td><td><b><input type="text" name="pekerjaan" readonly required value="<?php echo $pekerjaan; ?>" id="tgl_surat" style="width: 150px" class="form-control"></b></td></tr>

		</table>
	</div>
	</div>
	
<div class="container">	
	<div class="row">
	<div class="col-md-6">	

<?php
	
	
		$klas	="semar";
		
		
		
		
		$jpen		= $this->db->query("select * from a_docu where klas='$klas' and karis='1'")->result();
		
		
				foreach ($jpen as $e) {
				$kd_file	= $e->kode;
				$nama_file	= $e->nama_dok;
				$id_doc		= $e->id;

		?>
		
		<table>
				<tr>
					<b><td width="200px"><?php echo $nama_file; ?></td></b>
		
		<?php		
		$jfiles		= $this->db->query("select * from t_file where nip='$nip' and id_doc='$id_doc'")->row();
		$jfile=json_decode(json_encode($jfiles), True);
		if(isset($jfiles)){

			$idc = isset($jfile['id_doc'])?$jfile['id_doc']:'';	
			$n_file = isset($jfile['nama_file'])?$jfile['nama_file']:'';
			$tahun = isset($jfile['tahun'])?$jfile['tahun']:'';
		}
		
			if($idc == $id_doc && $idc != ''){	
				echo "	<td><a href='".base_URL()."upload/karis/".$nip."/".$n_file."' target='_blank' class='btn btn-success'>Lihat File</a></td>";
				}else{
						echo	"<td> Berkas Belum Ada!</td>";
				}
		?>
		</tr>
		</table>
		<?php
			}
		?>
	
	<tr><td colspan="2">
	<form action="<?=base_URL()?>admin/karis/download" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="nip" value="<?php echo $nip; ?>">
	<button type="submit" class="btn btn-info">Download</button>
		<a href="<?=base_URL()?>admin/karis" class="btn btn-success">Kembali</a>
		</td></tr>
		</div>
	</form>	
	</table>
	</div>
	</div>		
	

	
	
	
