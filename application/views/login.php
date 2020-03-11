<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
	<div class="row md-reverse">
		<div class="col-lg-4">
			<div class="login-form">
				<div class="text-center upper">
					<img src="/assets/img/bucks.png" alt="Bucks Logo" width="100" class="logo">
					<h6 class="text-blue">Welcome to TTS Bucks</h6>
					<p>Please enter yourcompany name below to begin</p>
					<form action="/" method="POST">
						<div class="form-group text-left company-input">
							<input type="text" name="company-name" id="company-name" class="dragon-input" required>
							<label for="company-name">Company Name</label>
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn-dragon btn" value="LOG IN">
						</div>
					</form>
				</div>
				<div class="city-logo" class="city-logo">
					<img src="/assets/img/city-logo.png" alt="City Bank">
				</div>
			</div>
		</div>
		<div class="col-lg-8 heading-img">
			<img src="/assets/img/dragon-logo.png" alt="Dragon Logo" class="dragon-logo">
			<div class="text text-center">
				<p>Innovation Driving Transformation</p>
				<p class="text-golden">Investment Projects</p>
			</div>
		</div>
	</div>
</div>