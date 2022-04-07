<h2 style="padding-left: 10%; padding-bottom: 2%; padding-top: 1%;"><?= esc($title) ?></h2>
<h4 style="padding-left: 10%; padding-right: 10%; padding-bottom: 3%; color: #4a4a4a;">Detailed below are all of the reviews of our website left by our loyal customers. If you'd like to submit your own review, create an account with us and complete the feedback form via its designated portal.</h4>


<?php if (! empty($feedback) && is_array($feedback)): ?>
	<div class="container" style="padding-left: 10%; padding-right: 10%; padding-bottom: 8%;">
		<?php foreach ($feedback as $feedback_item): ?>
			<div class="row" style="padding-bottom: 2%">
				<div class="col">
					<div class="card" style="width: 100%;">
						<div class="card-body">
							<h3 class="card-title" style="padding-left: 5%; padding-right: 5%;"><?= esc($feedback_item['title']) ?></h3>
							<h4 class="card-subtitle mb-2 text-muted" style="padding-left: 5%; padding-right: 5%;"><?= esc($feedback_item['name']) ?></h4>
							<?php if (esc($feedback_item['rating']) == 1) { ?>
								<div style="padding-left: 5%; padding-right: 5%;">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							<?php } 
							elseif (esc($feedback_item['rating']) == 2) { ?>
								<div style="padding-left: 5%; padding-right: 5%;">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							<?php } 
							elseif (esc($feedback_item['rating']) == 3) { ?>
								<div style="padding-left: 5%; padding-right: 5%;">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							<?php } 
							elseif (esc($feedback_item['rating']) == 4) { ?>
								<div style="padding-left: 5%; padding-right: 5%;">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							<?php } 
							elseif (esc($feedback_item['rating']) == 5) { ?>
								<div style="padding-left: 5%; padding-right: 5%;">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							<?php } ?>
							<h5 class="card-text" style="padding-left: 5%; padding-right: 5%;"><?= esc($feedback_item['body']) ?></h5>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
<?php else: ?>
	<h3>No Feedback</h3>
	<p>Unable to find any feedback for you.</p>
<?php endif ?>