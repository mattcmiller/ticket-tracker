
{extends file="layout.tpl"}
{block name=main-title}Create Project{/block}
{block name=content}
			<div class="box-style">
				
				<div class="box-title">
	  				<h3>Project</h3>
	  			</div>
			  	<div id="ticket_form">
						{if $error}
							<p>Invalid Ticket</p>
						{/if}
				
						<form action="../actions/a_create_ticket.php" method="post">
							<table>
								<tr>
									<td>Project:</td>
							
									<td>
										<select name="project">
										{foreach from=$projects item=project}
										  <option value="{$project.id}">{$project.title}</option>
										{/foreach}
										</select>
									</td>
								</tr>	
							<tr>
								<td>Ticket Title:</td>
								<td><input type="text" name="title" class="text-box" placeholder="ticket title"/></td>
							</tr>
							<tr>
								<td>Descripton:</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><textarea name="desc" placeholder="ticket description"></textarea></td>
							</tr>
							<tr>
								<td>Ticket Priority:</td>
						
								<td>
									<select name="priority">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									</select>
								</td>
							</tr>	
							<tr>
								<td>Select User:</td>
								<td>
									<select name="user_id">
									<option value="">Select User</option>
									 {foreach from=$users item=user}
									  <option value="{$user.id}">{$user.first_name} {$user.last_name}</option>
									  {/foreach}
									</select>
								</td>
							</tr>
							<tr>
								<td>Select Team:</td>
								<td>
									<select name="team_id">
									<option value="">Select Team</option>
									 {foreach from=$teams item=team}
									  <option value="{$team.team_id}">{$team.name}</option>
									  {/foreach}
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
