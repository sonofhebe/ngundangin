<!DOCTYPE html>
<html>
<head>
     <!-- TABLE STYLES-->
    <link href="{{asset('assets/css/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrapp.css')}}" rel="stylesheet" />
</head>
<body>
    <div  class ="col-sm-4">
        <table class="table table-striped table-bordered table-hover" id="tbl">
	        <thead>
    	        <tr>
        	        <th>Nama</th>
            	    <th>Pesan</th>                                         
                </tr>
            </thead>
            <tbody>
                <?php
					foreach($pesan as $pes){
				?>
					<tr>
						<td>{{$pes->namaPengirim}}</td>
						<td>{{$pes->isi}}</td>
					</tr>
				<?php } ?>                                   
            </tbody>
        </table>
    </div>
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap.js')}}"></script>
    <script>
           $(document).ready( function () {
            $('#tbl').dataTable( {
    "order": []
} );
} );
</script>
   
</body>
</html>
