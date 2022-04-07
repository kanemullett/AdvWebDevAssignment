<h2 style="padding-left: 10%; padding-bottom: 2%; padding-top: 1%;">Social Media</h2>
<h4 style="padding-left: 10%; padding-right: 10%; padding-bottom: 3%; color: #4a4a4a;">We are officially live on Twitter! Below is the tweet stream for our official Twitter account - check it out and give us a follow via over on the <a style="color: #4a4a4a; font-style: italic;" href="https://twitter.com/RealKMSports">account!</a></h4>

<?php 
$count = 0;
?>
<div class="container-fluid" style="padding: 0; width: 80vw;">
	<?php while ($count < 10) { ?>
	<div class="row justify-content-center" style="height: auto; width: 100%">
		<div class="col d-flex justify-content-center" style="padding: 3%; padding-left: 3%; padding-right: 3%; width: 100%">
			<div class="card" style="width: 100%; height: 100%;">
				<div class="card-body" style="padding-left: 5%; padding-right: 5%; padding-top: 3%;">
					<h6 style="font-size:90%">@RealKMSports (via Twitter)</h6>
					<h6 style="color: #4a4a4a; font-size:80%; font-style: italic; padding-top: 3%;"><?php print_r($tweets->data[$count]->text); ?> </h6>
					<h6 style="font-size:70%;"><?php $long = $tweets->data[$count]->created_at; 
					$trimmed = substr($long, 0, -14);
					print_r($trimmed);?> </h6>
					<div style="text-align: right">
						<a style="color: #4a4a4a; font-size: 60%; font-style: italic;" href="https://twitter.com/RealKMSports/status/<?php print_r($tweets->data[$count]->id); ?>">View on Twitter</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $count += 1; }?>
</div>

