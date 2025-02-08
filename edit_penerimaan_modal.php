
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_penerimaan<?php  echo $id_penerimaan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit User</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<input type="hidden" name="id_penerimaan" value="<?php echo $row['id_penerimaan'] ?>">
					<input type="hidden" name="id_user" value="<?php echo $_SESSION['ID'] ?>">
				
					<div class="col-12">
					<label for="inputNanme4" class="form-label">Status Penerimaan</label>
					<select name="status" class="form-select">
                        <option><?php echo $row['status'];?></option>
                        <option>Diterima</option>
                        <option>Ditolak</option>
                    </select>
					</div><br>
						<button name = "update" type="submit" class="btn btn-primary">Simpan</button>
					</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require 'dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;
			$id_penerimaan=$_POST['id_penerimaan'];
			$status=$_POST['status'];
			$id_user=$_POST['id_user'];

            $conn->query("UPDATE penerimaan SET id_user = '$id_user',status = '$status' WHERE id_penerimaan = '$id_penerimaan'")or die(mysql_error());
            echo "<script> window.location='penerimaan.php' </script>";
                
		}	
	?>
								
<?php
	}
?>