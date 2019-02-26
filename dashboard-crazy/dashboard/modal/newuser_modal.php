<div class="modal fade bd-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add new User </h5>
				<button type="button" class="close" data-dismiss="modal" onClick="reset_file_in()"><span>&times;</span></button>
			</div>
			<form method="post" action="assets/php/insertuser.php" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row" style="padding:30px">
						<div class="form-group col-sm-12 col-lg-6">
							<label for="fistname" class="col-form-label">Firstname</label>
							<input type="text" name="vname" class="form-control" id="fistname" required>
						</div>
						<div class="form-group col-sm-12 col-lg-6">
							<label for="lastname" class="col-form-label">Lastname</label>
							<input type="text" name="nname" class="form-control" id="lastname" required>
						</div>
					</div>
					<div class="row" style="padding:30px">
						<div class="form-group col-sm-12">
							<label for="fistname" class="col-form-label">Email</label>
							<input type="email" name="mail" class="form-control" id="fistname" required>
						</div>
					</div>
					<div class="row" style="padding:30px">
						<div class="input-group col-sm-12">
							<div class="custom-file">
								<input type="file" name="datei" class="custom-file-input" id="files" required>
								<label class="custom-file-label" for="files" id="input-label">Choose profile picture</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>

	function setname(evt){
		var myFile = $('#files').prop('files')[0];
		$('#input-label').text(myFile.name);
	}
	
	function reset_file_in(){
		$('#input-label').text("Choose profile picture");
	}
	
	document.getElementById('files').addEventListener('change', setname, false);

</script>