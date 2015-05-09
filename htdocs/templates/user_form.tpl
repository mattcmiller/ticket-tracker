

{extends file="layout.tpl"}
{block name=main-title}Create User{/block}

{block name=content}
			<div class="box-style">
				<div class="box-title">
	  				<h3>User</h3>
	  			</div>
	  			{if $message}
	  				<div class="valid">{$message}</div>
	  			{/if}
	  			{if $err}
	  				<div class="err">{$err}</div>
	  			{/if}
			  	<div id="ticket_form">
				
						<form action="../actions/a_create_user.php" method="post">
							<table>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="email" class="text-box" placeholder="Email"/></td>
							</tr>
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="first_name" class="text-box" placeholder="First Name"/></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="last_name" class="text-box" placeholder="Last Name"/></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="text" name="password" class="text-box" placeholder="Password"/></td>
							</tr>	
							<tr>
								<td>Retype Password:</td>
								<td><input type="text" name="retype_pass" class="text-box" placeholder="Retype Password"/></td>
							</tr>
							<tr>
								<td>Type:</td>
								<td>
									<select name="type">
										<option value="">Select Type</option>
										<option value="Engineer">Engineer</option>
										<option value="Project Manager">Project Manager</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Level:</td>
								<td>
									<select name="level">
										<option value="">Select Level</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</td>
							</tr>							
							<tr>
								<td>&nbsp;</td>
								<td><input type="image" src="imgs/submit-button.png" class="submit-bt" alt="Submit"></td>		
							</tr>	
						
							</table> 
						</form>
					</div>
				</div>

{/block}
