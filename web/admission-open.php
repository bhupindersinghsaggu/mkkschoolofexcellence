<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<iframe style="height:500px;" width="100%"
							src="https://curtina.in/_EazySchool/FormsWeb/frmEnquiry_Mkk.aspx?AppId=SOE">
						</iframe>
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
		const email = document.getElementById("email").value;
		const text = `Hello, my name is: ${name}
          Phone: ${phone}
		  Email: ${email} `;
		const url = `https://wa.me/${phoneNumber}?text=${text}`;
		window.open(url, 'index.php');
	});
</script>