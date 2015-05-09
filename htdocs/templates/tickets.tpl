
{extends file="layout.tpl"}
{block name=main-title}Tickets{/block}
{block name=content}
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<form action="tickets.php" method="POST">
								<select name="sort" class='left' onchange="this.form.submit()">
									<option value="all" {if $select=="all"}selected{/if} >All Tickets</option>
									<option value="mine" {if $select=="mine"}selected{/if} >My Tickets</option>
									{foreach from=$user_teams item=teams}
									<option value="{$teams.team_id}" {if $select == $teams.team_id}selected{/if} >{$teams.name}</option>
									{/foreach}
								</select>
							</form>
						</div>

	  					<div class="button right">
	  						<h3><a href="create_ticket.php">Create Ticket</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2" width="100%">
	  			<thead>
					<tr><th>Ticket#</th><th>Title</th><th>Description</th><th>status</th><th>priority</th><th>date</th><th>action</th></tr>
				</thead>
			  	{foreach from=$tickets item=ticket}
		 		<tr>
			  		<td>{$ticket.ticket_id}</td>
			  		<td>{$ticket.title|truncate:30}</td>
			    	<td>{$ticket.description|truncate:50}</td>
			    	<td>{$ticket.status}</td>
			    	<td>{$ticket.priority}</td>
			    	<td>{$ticket.timestamp|date_format}</td>
			    	<td><a href="#">Edit</a></td>
		    	</tr>
				{/foreach}
			</table>
			
			</div>
			<div class="center">
				<div class="green_button-prev">
					<a href="?idx={$previous}&sort={$select}">Prev </a>
				</div> 
				<div class="green_button-next">
					<a href="?idx={$next}&sort={$select}"> Next</a>
				</div>
			</div>
{/block}