<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	<h2>Sign in to manage the conference forms.</h2>
		<table>
			<tr>
				<td>
					<table>
						<?php echo $form ?>
					</table>
				</td>
				<td>
					<img src="/images/icons/Padlock.png" alt="Sign-In" />
				</td>
			</tr>
		</table>
		<input type="submit" value="sign in" />
  
</form>
