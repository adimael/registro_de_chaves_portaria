<?php
// Verifique se há uma mensagem de erro na URL
if (isset($_GET['error']) && $_GET['error'] === 'authentication_failed') {
	echo '<script>alert("Falha na autenticação. Verifique seu nome de usuário e senha.");</script>';
}

$this->layout("master") ?>

<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="/">
					<h1>WorkEase</h1>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<!--<li><a href="register.html">Register</a></li>-->
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="public/assets/vendors/images/logo-workease.png" alt="">
					<h2>Sistema de gestão</h2>
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Bem-vindo ao WorkEase</h2>
						</div>
						<form action="/" method="post">
							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password.html">Esqueceu sua senha?</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>