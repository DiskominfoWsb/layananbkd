<div class="navbar navbar-inverse"style="background-color:#3CB371;">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Upload Berkas</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->


<?php

	$idp			= $datpil->id;
	$nip			= $datpil->nip; 
	$nama			= $datpil->nama; 
	$jabatan		= $datpil->jabatan; 
	$skpd			= $datpil->skpd; 
	$jenkaris		= $datpil->jenkaris;
	$gol			= $datpil->gol;	
	$pendid			= $datpil->pendid;
	$klas			= "semar";



	
	

	echo $this->session->flashdata("k");
	


		
	 $jfiles		= $this->db->query("select * from t_filekaris where nip='$nip'")->row();
		$jfile=json_decode(json_encode($jfiles), True);
		if(isset($jfiles)){

			$idc = isset($jfile['id_doc'])?$jfile['id_doc']:'';	
			$n_file = isset($jfile['path'])?$jfile['path']:'';
			$tahun = isset($jfile['tahun'])?$jfile['tahun']:'';
		}	
		
	
	?>

	
	
	<div class="row-fluid well" style="overflow: hidden">
	
	<div class="col-lg-10">
		<table class="table-form">
		<tr><td width="47%">Nama Pegawai</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" id="nama" style="width: 300px" readonly class="form-control"></b></td></tr>
		<tr><td width="47%">N I P</td><td><b><input type="text" name="nip" required value="<?php echo $nip; ?>" id="nip" style="width: 300px" readonly class="form-control">
		</table>
	</div>
	
	
<div class="col-lg-10">	

		
	<table  class="table-form">
	
<?php



		
		
		
		
		$jpen		= $this->db->query("select * from a_docu where klas='".$klas."' and karis='1' order by urut")->result();
		
		
				foreach ($jpen as $e) {
				$kd_file	= $e->kode;
				$nama_file	= $e->nama_dok;
				$id_doc		= $e->id;
				$k_file		= $kd_file;

		?>
				<form action="<?=base_URL()?>admin/karis/act_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				
					<tr><td width="30%"><?php echo $nama_file; ?> </td><td><b><input type="file" name="<?php echo $kd_file; ?>" class="form-control"></b></td>
	<?php
        $jfiles		= $this->db->query("select * from t_filekaris where nip='".$nip."' and id_doc='".$id_doc."'")->row();
		$jfile=json_decode(json_encode($jfiles), True);
		if(isset($jfiles)){

			$idc = isset($jfile['id_doc'])?$jfile['id_doc']:'';	
			$n_file = isset($jfile['nama_file'])?$jfile['nama_file']:'';
			$tahun = isset($jfile['tahun'])?$jfile['tahun']:'';
			$path = isset($jfile['path'])?$jfile['path']:'';
		}

	?>	
		
		<input type="hidden" name="idp" value="<?php echo $idp; ?>">
		<input type="hidden" name="nip" value="<?php echo $nip; ?>">
		<input type="hidden" name="klas" value="<?php echo $klas; ?>">
		<input type="hidden" name="id_doc" value="<?php echo $id_doc; ?>">
		<input type="hidden" name="gol" value="<?php echo $gol; ?>">
		<input type="hidden" name="pendid" value="<?php echo $pendid; ?>">
		<input type="hidden" name="k_file" value="<?php echo $k_file; ?>">
	
	
	<td width="5%"><button type="submit" class="btn btn-info">Upload</button></td>
	
		<?php
		
		if($idc == $id_doc && $idc != ''){	
				echo "<td><i><a href='".base_URL()."upload/karis/".$nip."/".$n_file."' target='_blank' class='btn btn-success active' role='button' aria-pressed='true'>Cek File</a></div>";

			}
	?>
	
		
			</tr>
			</form>
			<?php
			}
			
			?>
		<tr><td colspan="2">

	<form action="<?=base_URL()?>admin/karis/download" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="nip" value="<?php echo $nip; ?>">
	<button type="submit" class="btn btn-info">Download</button>
		<a href="<?=base_URL()?>admin/karis" class="btn btn-success">Kembali</a>
		</td></tr>
		
		</table>	
	</div>

	</div>
	<div class="container" align="center">
		<img src="upload/tahapan_epens.jpg" width="200px"/>
	</div>
	
