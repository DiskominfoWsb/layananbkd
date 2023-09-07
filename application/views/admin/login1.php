
<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/amelia/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>.:: e-Agenda ::.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/css.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
	
		
</script>
  <body style="">
    <div class="navbar navbar-fixed-top"  >
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand"><strong style="font-family: verdana; margin-left: -50px; font-size: 24px;color:#ffffff;"><i>e-Agenda</i> </strong>Dinas Pengendalian Penduduk Keluarga Berencana Pemberdayaan Perempuan dan Perlindungan Anak</span>
		  <span>
		 	  
          
        </div>
         <div class="navbar-collapse collapse" id="navbar-main">
		  <ul class="nav navbar-nav navbar-right">
		  <li >
		<a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user"></i> Login</a>
             
           </li>
			
		  </ul>
		 </div>
		 
		 

      </div>
    </div>
<div class="container">
<br>
<div class="row">
<div class="col-md-12 col-md-offset-0">
<?php echo $this->session->flashdata("k");?>
<div class="fresh-table  full-color-blue">
<!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                        Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                -->
    <div class="toolbar">
    <button id="alertBtn" class="btn btn-default">Alert</button>
    </div>
                    
    <table id="fresh-table" class="table">
    <thead>

		<tr>
			<th width="10%">No.Kegiatan</th>
			<!-- <th width="4%">Tahun</th> -->
			<th width="25%">Tema Kegiatan</th>
			<th width="10%">Tanggal</th>
			<th width="10%">Jam</th>
			<th width="15%">Tempat</th>
			<th width="15%">Peserta</th>
			<th width="15%">Status</th>
			
		</tr>
	</thead>
	
	<tbody>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data2 as $b) {
		?>
		<tr>
			<td><?php echo $b->kode."/".$b->no_keg;?></td>
			<!--<td align="center">< ?=$b->tahun;?></td>-->
			<td><?=$b->isi_keg;?></td>
			<td align="center"><?=$b->tgl_keg;?><br><i>s.d</i><br><?=$b->tgl_keg_end;?></td>
			<td><?=$b->jam." - ".$b->jam_end;?></td>
			<td><?=$b->tempat;?></td>
			<td align="center"><?=$b->pegawai;?></td>
			<td></td>
			
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
</div>
</div>
<!--<center><ul class="pagination"><?php// echo $pagi; ?></ul></center>-->
</div>
	

<!--/.fluid-container-->	
<div class="row">
  <div class="col-md-12 col-md-offset-0">
    <center style="margin-top: -15px;">&copy; <a href="">2014</a> |<a href="http://bkd.wonosobokab.go.id">Badan Kepegawaian Daerah Kab.Wonosobo</a>
	</center>
	</div>
</div>	
</div>	
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
      </div>
      <div class="modal-body"><?=$this->session->flashdata("k")?>
        <form action="<?=base_URL()?>admin/do_login" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">User:</label>
            <input type="text" name="u" class="form-control" required autofocus>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password:</label>
            <input type="password" name="p" class="form-control" required>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
	   </form>
    </div>
  </div>
</div>	  
    
  
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$(" #alert" ).fadeOut(6000);
	});
	</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-table.js"></script>

    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
    
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                pageSize: 8,
                pageList: [8,10,25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
                        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
    
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
            
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
            
        });
            
    
        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
    
            
    </script>


</html>
