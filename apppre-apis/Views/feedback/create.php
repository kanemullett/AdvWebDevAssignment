
<?php $session = session();?>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<?php $name = $session->get('name'); ?>

<form action="/~1912688/online-shop/public/feedback/create" method="post">
    <?= csrf_field() ?>
	<input type="hidden" name="name" value= "<?php print_r($name) ?>" /><br />
	<div class="container" style="padding-left: 10%; padding-right: 10%; padding-bottom: 8%;">
		<div class="row" style="padding-bottom: 2%">
			<div class="col">
				<label for="title">Feedback Topic</label>
			</div>
			<div class="col">
				<textarea name="title" cols="45" rows="1"></textarea><br />
			</div>
		</div>
		<div class="row" style="padding-bottom: 2%">
			<div class="col">
				<label for="body">Thoughts</label>
			</div>
			<div class="col">
				<textarea name="body" cols="45" rows="4"></textarea><br />
			</div>
		</div>
		<div class="row" style="padding-bottom: 2%">
			<div class="col">
				<label for="rating">Rating</label>
			</div>
			<div class="col" style="padding-bottom: 2%; padding-right: 53%;">
				<select name="rating">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="2">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		</div>
		<div class="row" style="padding-bottom: 2%;">
			<div class="col-md-12 text-center">
				<input type="submit" class="btn btn-dark btn-lg" style="background-color: black; color: white; width: 200px; border-color: black;" name="submit" value="Post Feedback" />
			</div>
		</div>
	</div>
</form>