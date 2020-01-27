<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

<section id="content">    
	<form
		action="login"
		class="cleanForm"
        method="POST">
        
        <h1 class="center" id="loginHeader">
		    Login
	    </h1>

	<hr>

		<input
			class="input"
			type="email"
			name="email"
			placeholder="Email"
			<?php echo (!empty($data['emailError'])) ? 'is-invalid' : ''; ?>
		>

		<span
			class="invalidFeedback">
			<?php echo $data['emailError'] ?>
		</span>

		<input
			class="input"
			type="password"
			name="password"
			placeholder="Password"
			<?php echo (!empty($data['passwordError'])) ? 'is-invalid' : ''; ?>
		>

		<span
			class="invalidFeedback">
			<?php echo $data['passwordError']; ?>
		</span>

		<input
			id="submit"
			type="submit"
			value="SUBMIT"
        >
        
        <p class="options">
			Not registered yet?
				<a href="<?php echo URLROOT; ?>/users/register" >
					Create an account!
				</a>
		</p>

		<p class="options">
				<a href="<?php echo URLROOT; ?>/users/forgot">
					Forgot password?
				</a>
		</p>
		</form>

		
	</section>

<?php require APPROOT . '/view/include/footer.php'; ?>