<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

<section id="content">
		<h1 class="center" id="loginHeader">
			Register
		</h1>

		<br>

		<form action="register" class="cleanForm" method="POST">
			
				<label class="inputHeader">
                    First name *
                    <br>
                    <input type="text" name="name" <?php echo (!empty($data['nameError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"> <?php echo $data['nameError'] ?> </span>
				</label>
                <br>
				<label class="inputHeader">
                    Last name *
                    <br>
                    <input type="text" name="lastName" <?php echo (!empty($data['lastNameError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"><?php echo $data['lastNameError'] ?></span>
				</label>
                <br>
                <label class="inputHeader">
                    Studentnummmer *
                    <br>
                    <input type="text" name="studentNumber" <?php echo (!empty($data['studentNumberError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"><?php echo $data['studentNumberError'] ?></span>
				</label>
                <br>
				<label class="inputHeader">
                    E-email *
                    <br>
                    <input type="email" name="email" <?php echo (!empty($data['emailError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"><?php echo $data['emailError'] ?></span>
				</label>
                <br>
				<label class="inputHeader">
                    Password *
                    <br>
                    <input type="password" name="password" <?php echo (!empty($data['passwordError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"><?php echo $data['passwordError'] ?></span>
				</label>
                <br>
				<label class="inputHeader">
                    Confirm password *
                    <br>
                    <input type="password" name="passwordConfirm" <?php echo (!empty($data['passwordConfirmError'])) ? 'is-invalid' : ''; ?> value="">
                    <br>
					<span class="invalidFeedback"><?php echo $data['passwordConfirmError'] ?></span>
				</label>
                <br>
				<label>
					* required
				</label>

			

			<br>

			<input id="submit" type="submit" value="Register">
		</form>
	</section>

<?php require APPROOT . '/view/include/footer.php'; ?>