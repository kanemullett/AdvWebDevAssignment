<div class="d-flex justify-content-center" style="width: 100vw;">
	<div class="container-fluid justify-content-center" style="padding: 0; margin: 0; width: 80%;">
        <div class="row">
			<div class="col d-flex justify-content-center">
                <h3 style="padding-bottom: 2%; padding-top: 10%;">Sign Up</h3>
			</div>
		</div>
		<?php if(isset($validation)):?>
        <div class="alert alert-info">
            <?= $validation->listErrors() ?>
        </div>
        <?php endif;?>
		<form action="<?php echo base_url(); ?>/RegisterController/store" method="post" style="padding-bottom: 15%;">
			<div class="row justify-content-center" style="height: auto;">
				<div class="col d-flex justify-content-center">
                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" style="width: 300px">
                </div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col d-flex justify-content-center">
					<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" style="width: 300px">
                </div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col d-flex justify-content-center">
                    <input type="password" name="password" placeholder="Password" class="form-control" style="width: 300px">
                </div>
			</div>
            <div class="row justify-content-center" style="height: auto; padding-top: 1%">
				<div class="col d-flex justify-content-center">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" style="width: 300px">
                </div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 3%;">
				<div class="col d-flex justify-content-center">
					<h6>Already have an account? <a href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/LoginController">Log In</a></h6>
                </div>
			</div>
			<div class="row justify-content-center" style="height: auto; padding-top: 2%;">
				<div class="col d-flex justify-content-center">
					<button type="submit" class="btn btn-dark btn-lg" style="background-color: black; width: 300px; margin: auto;">Register</button>
				</div>
			</div>
        </form>
    </div>
</div>
