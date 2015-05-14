<div id="login">
	<img src="imgs/tasktracker-logo.png"/>
	<div id="login-inner">
		
		{if $error}
			<p>Invalid Login</p>
		{/if}

		<form action="../actions/a_login.php" method="post">
		 <p><input type="text" name="email" class="text-box" placeholder="User Email"/></p>
		 <p><input type="password" name="password" class="text-box" placeholder="Password" /></p>
		 <br/>
		 <p><input type="image" src="imgs/submit-button.png" class="submit-bt" alt="Submit"></p>
		</form>
	</div>
</div>