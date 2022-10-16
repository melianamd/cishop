<div class="content">
	<div class="container">
		<?php $this->load->view('layouts/_alert') ?>
		<div class="row">
			<div class="col-md-6">
				<img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6 contents">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="mb-4">
							<h3>Log in</h3>
						</div>
						<?= form_open('login', ['method' => 'POST']) ?>
						<div class="form-group first">
							<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) ?>
							<?= form_error('email') ?>
						</div>
						<div class="form-group last mb-4">
							<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => true]) ?>
							<?= form_error('password') ?>

						</div>

						<input type="submit" value="Log In" class="btn btn-primary" style="width:420px ;">
						<?= form_close() ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>