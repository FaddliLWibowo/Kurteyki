<?php $this->load->view('lms/default-app/_layouts/header'); ?>

<?php $this->load->view('user/payment/part/nav'); ?>

<div class="container u-mt-medium" style="padding-bottom: 200px">                   
	<div class="row">
		<div class="col-12 col-xl-8 offset-xl-2">    

			<?php $this->load->view('user/payment/part/courses-info'); ?>
			<?php $this->load->view('user/payment/part/coupon'); ?>

		</div>
	</div>
</div>


<?php $this->load->view('user/payment/part/payment-button'); ?>

<?php $this->load->view('lms/default-app/_layouts/footer'); ?>