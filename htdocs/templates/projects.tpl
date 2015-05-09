
{extends file="layout.tpl"}
{block name=main-title}Projects{/block}
{block name=content}
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="{$project.id}">All Projects</option>
								<option value="{$project.id}">My Projects</option>
								<option value="{$project.id}">CarRamRod Projects</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="#">Create Project</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#Id</th><th>Title</th></tr>
				</thead>
			  	{foreach from=$projects item=project}
		 		<tr>
			  		<td>#{$project.id}</td>
			  		<td>{$project.title}</td>
		    	</tr>
				{/foreach}
			</table>
			</div>

{/block}