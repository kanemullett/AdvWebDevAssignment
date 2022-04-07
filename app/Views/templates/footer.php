	<div>
		<h6 style="text-align: center; padding-top: 10px;">OFFICIAL BRAND PARTNERS</h6>
	</div>
	<div class="container-fluid" style="width: 70%">
		<div class="row">
			<div class="col text-center">
				<img class="img-fluid" src="<?=base_url('Nike-Logo.png')?>" alt="..." style="width: auto; height: 70%; padding: 5%;">
			</div>
			<div class="col text-center">
				<img class="img-fluid" src="<?=base_url('Adidas-Logo.png')?>" alt="..." style="width: auto; height: 70%; padding: 5%;">
			</div>
			<div class="col text-center">
				<img class="img-fluid" src="<?=base_url('Puma-Logo.png')?>" alt="..." style="width: auto; height: 70%; padding: 5%;">
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: black; font-size: 20px; text-align: center; padding: 0;">
		<div class="container" style="padding-top: 20px";>
			<div class="row">
				<div class="col">
					<a style="color: white; font-size: 70%">HEAR FROM US</a>
				</div>
				<div class="col">
					<a style="color: white; font-size: 70%">ORDER WITH CONFIDENCE</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/aboutus">About Us</a>
				</div>
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/feedback">Feedback</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/contactus">Contact Us</a>
				</div>
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/shipping">Shipping</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/Apis/socialmedia">Social Media</a>
				</div>
				<div class="col">
					<a style="color: #4a4a4a;" href="https://mi-linux.wlv.ac.uk/~1912688/online-shop/public/pages/view/returns">Returns</a>
				</div>
			</div>
		</div>
		<div class="copyright" style="text-align: center;">
			<em style="color: white; font-size: 14px;">&copy; 2022 Kane Mullett</em>
		</div>
	</div>
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );
</script>

</body>
</html>
