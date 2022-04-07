<div class="d-flex justify-content-center" style="width: 100vw;">
	<?php $session = session();?>
	<div class="container-fluid justify-content-center" style="padding: 0; margin: 0; width: 80%;">
		<div class="row">
			<div class="col d-flex justify-content-center">
                <h3 style="padding-bottom: 2%; padding-top: 3%;">Checkout</h3>
			</div>
		</div>
		<div class="row" style="padding-bottom: 2%">
			<div class="col d-flex justify-content-center">
				<div class="card">
					<div class="card-header">
						<?php echo $session->get('name')?>'s Order
					</div>
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<p><?php echo $session->get('name')?>'s Order</p>
							<footer class="blockquote-footer"></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<form action="/~1912688/online-shop/public/products/checkout" method="post" style="padding-bottom: 15%;">
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col-4 d-flex justify-content-start">
					<label for="autocomplete"> Name:</label>
				</div>
				<div class="col-8 d-flex justify-content-center">
					<input type="text" name="name" id="name" style="width: 100%" placeholder="Full Name"></input><br />
				</div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col-4 d-flex justify-content-start">
					<label for="autocomplete"> Address:</label>
				</div>
				<div class="col-8 d-flex justify-content-center">
					<input type="text" name="autocomplete" id="autocomplete" style="width: 100%"/><br />
				</div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col-4 d-flex justify-content-start">
					<label for="autocomplete"> Postcode:</label>
				</div>
				<div class="col-8 d-flex justify-content-center">
					<input type="text" name="postcode" id="postcode" style="width: 100%" placeholder="Enter a postcode"></input><br />
				</div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col-4 d-flex justify-content-start">
					<label for="autocomplete"> Contact Number:</label>
				</div>
				<div class="col-8 d-flex justify-content-center">
					<input type="text" name="phone" id="phone" style="width: 100%" placeholder="Enter a phone number"></input><br />
				</div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col-4 d-flex justify-content-start">
					<label for="autocomplete"> Email:</label>
				</div>
				<div class="col-8 d-flex justify-content-center">
					<input type="text" name="email" id="email" style="width: 100%" placeholder="Enter your email"></input><br />
				</div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 2%;">
				<div class="col d-flex justify-content-center">
					<a type="button" class="btn btn-dark btn-lg" style="background-color: black; color: white; width: 200px; border-color: black;" name="submit" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/checkout/success">Complete Checkout</a>
				</div>
			</div>
		</form>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyB4KwfmCUBC1BvxCRT90DbDxj2EOFUaTBE&libraries=places&callback=initAutocomplete"></script>
<script>
    $(document).ready(function() {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    }); 
	
    google.maps.event.addDomListener(window, 'load', initialize);
	function initialize() {
		var input = document.getElementById('autocomplete');
		var autocomplete = new google.maps.places.Autocomplete(input);
		
		autocomplete.addListener('place_changed', function() {
			var place = autocomplete.getPlace();
			
			$('#latitude').val(place.geometry['location'].lat());
			$('#longitude').val(place.geometry['location'].lng());
			
			$("#latitudeArea").removeClass("d-none");
			$("#longtitudeArea").removeClass("d-none");
		});
	} 
</script>
</div>