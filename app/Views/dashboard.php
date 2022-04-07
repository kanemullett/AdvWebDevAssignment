<?php $session = session();?>
<h2 style="padding-left: 10%; padding-bottom: 2%; padding-top: 1%;">Hey <?php echo $session->get('name'); ?>!</h2>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="padding-bottom: 2%;">
			<a type="button" class="btn btn-dark btn-lg" style="background-color: black; width: 200px; margin: auto;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/feedback/create">Submit Feedback</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center" style="padding-bottom: 2%;">
			<a type="button" class="btn btn-dark btn-lg" style="background-color: black; width: 200px; margin: auto;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/checkout">Checkout</a>
		</div>
	</div>
</div>