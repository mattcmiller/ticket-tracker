
{extends file="layout.tpl"}
{block name=main-title}Teams{/block}
{block name=content}
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="{$project.id}">All Teams</option>
								<option value="{$project.id}">My Teams</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="#">Create Team</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#Id</th><th>Name</th></tr>
				</thead>
			  	{foreach from=$teams item=team}
		 		<tr>
			  		<td>#{$team.team_id}</td>
			  		<td>{$team.name}</td>
		    	</tr>
				{/foreach}
			</table>
			</div>

{/block}