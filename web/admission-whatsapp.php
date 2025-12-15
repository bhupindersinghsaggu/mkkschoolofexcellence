<!-- Modal -->
<div class="modal fade" id="exampleModalLabelwhatsapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelwhatsapp" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Admission Open 2026-27</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="contact-form">
							<form id="whatsappForm" class="row">
								<div class="col-lg-12 form-group">
									<i class="feather-icon icon-user"></i>
									<input class="form-control" name="name" type="text" placeholder="Name" id="name" required="">
									<div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
								</div>
								<div class="col-lg-12 form-group">
									<i class="feather-icon icon-mail"></i>
									<select class="form-control" name="classes" id="classes" required>
										<option value="">Select Class</option>
										<option value="Play Group">Play Group</option>
										<option value="Nursery">Nursery</option>
										<option value="KG, Prep">KG, Prep</option>
										<option value="Class I">Class I</option>
										<option value="Class II">Class II</option>
										<option value="Class III">Class III</option>
										<option value="Class IV">Class IV</option>
										<option value="Class V">Class V</option>
										<option value="Class VI">Class VI</option>
										<option value="Class VII">Class VII</option>
									</select>
								</div>


								<div class="col-lg-12 form-group">
									<i class="feather-icon icon-phone-call"></i>
									<input class="form-control" type="text" name="phone" id="phone" placeholder="Phone Number" required="">
								</div>
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary-orange  mt-4" data-bs-target="#exampleModalToggle2">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
		</div>
	</div>
</div>


<script>
	document.getElementById('whatsappForm').addEventListener('submit', function(e) {
		e.preventDefault();

		// Replace with your WhatsApp number
		const phoneNumber = "919034252500";
		const name = document.getElementById("name").value;
		const phone = document.getElementById("phone").value;
		// const message = document.getElementById("message").value;
		const classes = document.getElementById("classes").value;
		const text = `Hello, my name is: ${name}
          Phone: ${phone}
		  Classes: ${classes} `;
		const url = `https://wa.me/${phoneNumber}?text=${text}`;
		window.open(url, 'index.php');
	});
</script>