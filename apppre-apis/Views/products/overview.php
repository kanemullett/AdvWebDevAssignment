

<?php if (! empty($products) && is_array($products)): ?>
	<div class="container-fluid" style="padding: 0; width: 100vw;">
		<div class="row" style="height: 10%">
		<?php foreach ($products as $products_item): ?>
			<div class="col d-flex justify-content-center" style="padding: 3%;">
				<div class="card" style="width: 18rem; height: auto;">
					<img src="<?=base_url(esc($products_item['image']))?>" class="card-img-top img-fluid" alt="...">
					<div class="card-body">
						<h5 class="card-title" style="font-size: 90%">£<?= esc($products_item['price']) ?></h5>
						<h6 class="card-subtitle" style="color: #4a4a4a; font-size: 60%;"><?= esc($products_item['gender']) ?>'s <?= esc($products_item['type']) ?></h5>
						<p class="card-text" style="font-size:100%"><?= esc($products_item['title']) ?></p>
						<a href="/~1912688/online-shop/public/products/<?= esc($products_item['slug'], 'url') ?>" class="btn" style="background-color: black; color: white; font-size: 20px;">View</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		</div>
	</div>

<?php else: ?>

    <h3>No Products</h3>

    <p>Unable to find any products for you.</p>

<?php endif ?>