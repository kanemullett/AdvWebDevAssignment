<h2 style="padding-left: 10%; padding-bottom: 2%; padding-top: 1%;">Product Search</h2>
<?php $destination = "https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/products/"; ?>
<?php if (! empty($products) && is_array($products)): ?>
<div class="container" style="width: 100%">
	<div class="row justify-content-center">
		<div class="col-auto">
			<table id="example" class="table table-striped table-responsive" style="width:100%">
				<thead>
					<tr>
						<th><h2>Product</h2></th>
						<th><h2></h2></th>
						<th><h2>Type</h2></th>
						<th class="text-center"><h2>Price</h2></th>
						<th class="text-center"><h2>Brand</h2></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($products as $products_item): ?>
					<tr>
						<td class="align-middle"><h5><a style="color: black;" href=<?php echo $destination . esc($products_item['slug']) ?>><?= esc($products_item['title']) ?></a></h5></td>
						<td class="align-middle"><img style="width: 80px; height: auto;" src="<?=base_url(esc($products_item['image']))?>"><img></td>
						<td class="align-middle"><h5><?= esc($products_item['gender']) ?>'s <?= esc($products_item['type']) ?></h5></td>
						<td class="align-middle text-center"><h5>£<?= esc($products_item['price']) ?></h5></td>
						<td class="align-middle text-center"><h5><?= esc($products_item['brand']) ?></h5></td>
					</tr>
				<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th><h3>Title</h3></th>
						<th><h3></h3></th>
						<th><h3>Type</h3></th>
						<th><h3>Price</h3></th>
						<th><h3>Brand</h3></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<?php endif ?>