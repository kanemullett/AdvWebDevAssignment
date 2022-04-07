<!doctype html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>KM</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<style>
		@font-face {
			font-family: 'Coolvetica';
			src: url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.svg'); /* IE9 Compat Modes */
			src: url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
				url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.woff2') format('woff2'), /* Super Modern Browsers */
				url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.woff') format('woff'), /* Pretty Modern Browsers */
				url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.ttf') format('truetype'), /* Safari, Android, iOS */
				url('https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/fonts/CoolveticaRg-Regular.svg#svgFontName') format('svg'); /* Legacy iOS */
			font-weight: 400;
			font-style: normal;
		}
		
		body {
		  margin: 0;
		  padding: 0;
		  overflow-x: hidden;
		  font-size: 28px;
		  font-family: 'Coolvetica', Arial, sans-serif;
		}

		.header {
		  position: fixed;
		  top: 0;
		  z-index: 1;
		  width: 100%;
		  background-color: #f1f1f1;
		}

		.header h2 {
		  text-align: center;
		}
		
		.fa-star {
		  color: #c7c7c7;
		}
		.checked {
		  color: black;
		}
		
		tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
		}
		
		.paginate_button {
			color: black;
			padding: 10px;
		}
		
		.dataTables_paginate paging_simple_numbers {
			padding: 50% 0;
		}
		
		.dataTables_filter {
			text-align: center;
		}
		
		label {
			color: black;
		}
		
		.dataTables_wrapper .dataTables_paginate .paginate_button.current, 

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

            background: none !important;

            border-radius: 0px;
			
			border: 1px solid black;
			
			background-color: #e9e9e9 !important;

			color:var(--lightColor) !important

        }

        

        

        .dataTables_wrapper .dataTables_paginate .paginate_button {

              background: none !important;

          color: black !important

        }

		.paginate_button.current:hover

		{

			  background: none !important;

              border-radius: 50px;

              background-color: pink !important;

          color:#fff !important

		}

  .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,

  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {

    border: 1px solid black;

    background: none !important;

    border-radius: 0px !important;

    background-color: white !important;
	
	border-style: solid;

    color: black !important;
	
  

  }
  
	.dataTables_paginate {
		text-align: center;
	}
	
	a {
		text-decoration: none;
	}
	
	a:hover {
		text-decoration: underline;
	}
	
	/* Style the header: fixed position (always stay at the top) */
	.header {
		position: fixed;
		top: 0;
		z-index: 1;
		width: 100%;
		background-color: #f1f1f1;
	}

	/* The progress container (grey background) */
	.progress-container {
	    width: 100%;
	    height: 8px;
	    background: #ccc;
	}

	/* The progress bar (scroll indicator) */
	.progress-bar {
	    height: 8px;
	    background: #04AA6D;
	    width: 0%;
	}

	.mobileShow {display: none;}

	/* Smartphone Portrait and Landscape */
	@media only screen
		and (min-device-width : 320px)
		and (max-device-width : 480px){ 
		.mobileShow {display: inline;}
	}
	</style>
</head>
<body>
	<?php $session = session();?>
	<div class="sticky-top">
		<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: white;">
			<div class="container-fluid">
				<a class="navbar-brand" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/home">
					<img src="<?=base_url('Logo.svg')?>" alt="website-logo" width="100" height="50">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/home">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="typeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Clothing
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/type/headwear">Headwear</a></li>
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/type/upper%20body">Upper Body</a></li>
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/type/lower%20body">Lower Body</a></li>
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/type/footwear">Footwear</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Shop By Brand
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/brands/nike">Nike</a></li>
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/brands/adidas">Adidas</a></li>
								<li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/brands/puma">Puma</a></li>
							</ul>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item d-flex">
						<?php
						if ($session->get('name') == '') { ?>
							<a class="nav-link" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/LoginController">
								<?php echo "Login"; ?>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/RegisterController">
								<?php echo "Register"; ?>
							</a>
						</li>
						<?php }
						else { ?>
						<li class="nav-item">
							<a class="nav-link" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/DashboardController">
								<?php echo $session->get('name')?>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/Logout" style="color: RGBA(255,0,0,0.7)">
								<?php echo "LogOut"; ?>
							</a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<div class="container-fluid justify-content-center">
								<div class="row">
									<div class="col d-flex justify-content-center">
										<a class="navbar-brand" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/search">
											<img src="<?=base_url('Search.svg')?>" alt="search" width="40" height="40">
										</a>
									</div>
									<div class="col d-flex justify-content-center">
										<a type="button" class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
											<img src="<?=base_url('Basket.svg')?>" alt="basket" width="40" height="40">
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="secondary-bar" style="background-color: black; text-align: center;">
			<div class="container-fluid justify-content-center">
				<div class="row">
					<div class="col-2 d-flex justify-content-center">	
						<div class="mobileShow">
							<a style="color: white; font-size: 24px;">&#127482;&#127462;</a>
						</div>
					</div>
					<div class="col-8 d-flex justify-content-center">
						<a style="color: white; font-size: 24px;">Slava Ukraini!</a>
					</div>
					<div class="col-2 d-flex justify-content-center">
						<div class="mobileShow">
							<a style="color: white; font-size: 24px;">&#127482;&#127462;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="staticBackdropLabel">My Basket</h3>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?php if ($session->get('id') != '') { ?>
					<div class="modal-body">
						<?php $total = 0; ?>
						<?php $itemcount = 0; ?>
						<?php foreach ($basket as $basket_item): ?>
							<?php if ($session->get('id') == $basket_item['customerID']) { ?>
								<div class="card mb-3" style="max-width: 540px;">
									<div class="row g-0">
										<div class="col-md-4">
											<img src="<?=base_url(esc($basket_item['image']))?>" class="img-fluid rounded-start" alt="..." style="height: auto; width: 100%;">
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<h4 class="card-title"><?= esc($basket_item['productName']) ?></h4>
												<h6 class="card-text">Quantity: <?php print_r($basket_item['quantity'])?></h6>
												<?php $quantityapplied = ($basket_item['price'] * $basket_item['quantity']); ?>
												<h4 class="card-text"><small class="text-muted">£<?php echo number_format((float)$quantityapplied, 2, '.', ''); ?></small></h4>
											</div>
										</div>
										<?php $total = $total + $quantityapplied; ?>
										<?php $itemcount += 1; ?>
									</div>
								</div>
							<?php } else { ?>
								<?php ''; ?>
							<?php } ?>
						<?php endforeach ?>
						<div class="row">
							<div class="col d-flex justify-content-end">
								Total:	£<?php echo number_format((float)$total, 2, '.', ''); ?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a type="button" class="btn btn-secondary" style="background-color: white; border-color: black; color: black;" data-bs-dismiss="modal">Close</a>
						<a type="button" class="btn btn-primary" style="background-color: black; border-color: black;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/checkout">Checkout</a>
					</div>
				<?php } elseif ($session->get('id') == '') { ?>
					<div class="modal-body">
						<h4>You must be logged in to access your basket.</h4>
					</div>
					<div class="modal-footer">
						<a type="button" class="btn btn-secondary" style="background-color: white; border-color: black; color: black;" data-bs-dismiss="modal">Close</a>
						<a type="button" class="btn btn-primary" style="background-color: black; border-color: black;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/LoginController">Login</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>