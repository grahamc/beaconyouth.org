<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	<h2>Sign in to manage the conference forms.</h2>
	<div>
		<div class="signin_form">
			<table>
				<?php echo $form; ?>
			</table>
		</div>
		<div class="signin_graphic">
			<img src="/images/icons/Padlock.png" alt="Sign-In" style="margin-top: -30px;"/>
		</div>
	</div>
	<input type="submit" value="sign in" />
</form>
