
{extends file="layout.tpl"}
{block name=main-title}Users{/block}
{block name=content}
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="#">All Users</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="create_user.php">Create User</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#id</th><th>name</th><th>username</th><th>type</th><th>level</th></tr>
				</thead>
			  	{foreach from=$users item=user}
		 		<tr>
			  		<td>#{$user.id}</td>
			  		<td>{$user.first_name} {$user.last_name}</td>
			  		<td>{$user.email}</td>
			  		<td>{$user.type}</td>
			  		<td>{$user.level}</td>
		    	</tr>
				{/foreach}
			</table>
			</div>

{/block}