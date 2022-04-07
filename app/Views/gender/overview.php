<h2 style="padding-left: 10%;"><?= esc($title) ?></h2>

<?php if (! empty($products) && is_array($products)): ?>
	<div class="container" style="width: 100%">
		<?php $count = 0; ?>
		<?php foreach ($products as $products_item): ?>
			<?php if ($count % 2 == 0): ?>
				<div class="row">
					<div class="col-6 d-flex justify-content-center">
						<div class="card" style="width: 18rem;">
							<img src="<?=base_url(esc($products_item['image']))?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">£<?= esc($products_item['price']) ?></h5>
								<h6 class="card-subtitle" style="color: #4a4a4a;"><?= esc($products_item['gender']) ?>'s <?= esc($products_item['type']) ?></h5>
								<p class="card-text"><?= esc($products_item['title']) ?></p>
								<a href="/~1912688/online-shop/public/products/<?= esc($products_item['slug'], 'url') ?>" class="btn" style="background-color: black; color: white;">Take a Look</a>
								<?php $count += 1 ?>
							</div>
						</div>
					</div>
			<?php else: ?>
					<div class="col-6 d-flex justify-content-center">
						<div class="card" style="width: 18rem;">
							<img src="<?=base_url(esc($products_item['image']))?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">£<?= esc($products_item['price']) ?></h5>
								<h6 class="card-subtitle" style="color: #4a4a4a;"><?= esc($products_item['gender']) ?>'s <?= esc($products_item['type']) ?></h5>
								<p class="card-text"><?= esc($products_item['title']) ?></p>
								<a href="/~1912688/online-shop/public/products/<?= esc($products_item['slug'], 'url') ?>" class="btn" style="background-color: black; color: white;">Take a Look</a>
								<?php $count += 1 ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>

<?php else: ?>

    <h3>No Products</h3>

    <p>Unable to find any products for you.</p>

<?php endif ?>