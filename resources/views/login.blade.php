@include('headerLogin')








		<div id="lp-register">
			<div class="container wrapper">
				<div class="row">
					<div class="col-sm-5">
						<div class="intro-texts">
							<h1 class="text-white">Scopri il mondo della birra!</h1>
							<p>Beer &egrave; la piattaforma che fa al caso tuo, sia che tu sia un amotore della birra, sia nel caso tu sia un fornitre! Offriamo le migliori maarche di birra disponibili sul mercato!<br /> <br />Cosa aspetti? Registrati!</p>
							<button class="btn btn-primary" onclick="document.location.href='#';">Scopri di pi&ugrave;</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<div class="reg-form-container"> 
							<div class="reg-options">
								<ul class="nav nav-tabs">
									<li><a href="#">Registrati</a></li>
									<li class="active"><a href="#">Accedi</a></li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane active">
									<h3>Login</h3>
									<p class="text-muted">Accedi al tuo Account!</p>
									
									<div name="MessageBoard" id="MessageBoard" class="errors"></div>
									
									
									<!--<form name="Login_form" id='Login_form'>-->
									<form id="formLogin" method="POST" action="{{ url('login-post') }}">
										@csrf
										
										<input type="hidden" name="subLogin" id="subLogin" value="" />
										<div class="row">
											<div id="frm_login" class="form-group col-xs-12">
												<label for="name" class="sr-only">Username</label>
												<input type="text" name="name" id="name" class="form-control input-group-lg" placeholder="Username" />
											</div>
										</div>
										<div class="row">
											<div id="frm_password" class="form-group col-xs-12">
												<label for="password" class="sr-only">Password</label>
												<input type="password" name="password" id="password" class="form-control col-xs-12 input-group-lg" placeholder="Password"/>
											</div>
										</div>
									</form>
									<p><a href="#">Hai dimenticato la tua password? </a></p>
									<button class="btn btn-primary" onclick="getCheck();">Accedi ora</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		







@include('footer')