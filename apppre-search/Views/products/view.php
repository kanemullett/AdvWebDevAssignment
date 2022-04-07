<?php $session = session();?>
<div class="d-flex justify-content-center" style="width: 100vw;">
	<div class="container-fluid justify-content-center" style="padding: 0; margin: 0; width: 80%;">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<a role="button" class="btn btn-link" style="color: black;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/products">← Back to All Products</a>
			</div>
		</div>
	</div>
</div>
<div class="card" style="width: 100vw; height: auto; padding-bottom: 10%">
    <img src="<?=base_url(esc($products['image']))?>" class="card-img-top img-fluid" alt="..." style="padding: 30%; padding-bottom: 0; padding-top: 5%;">
	<div class="card-body" style="padding-left: 15%; padding-right: 15%;">
		<h6 class="card-subtitle" style="color: #4a4a4a; font-size: 60%;"><?= esc($products['gender']) ?>'s <?= esc($products['type']) ?></h5>
		<h1 class="card-text"><?= esc($products['title']) ?></h1>
		<h5 class="card-title" style="font-size: 90%">£<?= esc($products['price']) ?></h5>
		<form action="/~1912688/online-shop/public/products/view/<?php print_r($products['slug'])?>" method="post">
			<?= csrf_field() ?>
			<?php $id = $session->get('id'); ?>
			<input type="hidden" name="customerID" value= "<?php print_r($id) ?>" /><br />
			<input type="hidden" name="productName" value= "<?php print_r($products['title']) ?>" /><br />
			<input type="hidden" name="productID" value= "<?php print_r($products['id']) ?>" /><br />
			<label for="quantity"> Quantity:</label>
			<input type="number" id="quantity" name="quantity" step="1"><br />
			<input type="hidden" name="price" value= "<?php print_r($products['price']) ?>" /><br />
			<input type="hidden" name="image" value= "<?php print_r($products['image']) ?>" /><br />
			<input type="submit" class="btn btn-dark btn-lg" style="background-color: black; color: white; width: 200px; border-color: black;" name="submit" value="Add to Basket" />
		</form>
		<div class="accordion accordion-flush" id="accordionFlushExample" style="width: 100%; padding-top: 10%;">
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingOne">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
						Description
					</button>
				</h2>
				<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body">
						<h6 style="color: #4a4a4a;"><?= esc($products['description']) ?></h6>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingTwo">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
						Shipping
					</button>
				</h2>
				<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body">
						<h6 style="color: #4a4a4a;">Free local delivery is available for orders over £50 within the United Kingdom & Republic of Ireland. For orders under £50, we charge a variable rate for worldwide delivery. <br /><br />
						Deliveries are made from 09:00-17:00 on Mondays-Fridays. We will contact you via text message with the phone number you provided at checkout to notify you on the day of our arrival. </h6>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingThree">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
						Returns
					</button>
				</h2>
				<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
					<div class="accordion-body">
						<h6 style="color: #4a4a4a;">We accept returns up to 30 days after delivery, if the item is unused and in its original condition, and we will refund the full order amount minus the shipping costs for the return. <br /><br />
						In the event that your order arrives damaged in any way, please email us as soon as possible at support@kmsports.com with your order number and a photo of the item’s condition. We address these on a case-by-case basis but will try our best to work towards a satisfactory solution. <br /><br />
						If you have any further questions, please don't hesitate to contact us at support@kmsports.com.</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>