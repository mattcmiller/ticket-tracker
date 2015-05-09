{extends file="layout.tpl"}

{block name=main-title}Dashboard{/block}

{block name=content}
	<div class="sidebar box-style">
		
		<div class="box-title">
	  		<h3>My Profile</h3>
	  	</div>
	  	
		<img src="imgs/profile.png" width="250px"/>
		
		<div class="profile-info">
			<p>Name: {$user.first_name} {$user.last_name}</p>
			<p>Email: {$user.email}</p>
			<p>Level:{$user.level}</p>
			<br/>
			<h3>My Teams</h3>
		</div>
		
	</div>
	
	<div id="stat-bar" class="box-style">
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1>{$active_ticket_cnt}</h1>
				<p><b>Active Tickets</b></p>
				<p>{$ticket_cnt} total</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1>{$my_ticket_cnt}</h1>
				<p><b>My Tickets</b></p>
				<p>0 remain</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1>{$user_teams_cnt}</h1>
				<p><b>My Teams</b></p>
				<p>{$teams_cnt} total</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1>1</h1>
				<p><b>My Projects</b></p>
				<p>2 Total Projects</p>
			</div>
		</div>
		<div class="stat-box-last">
			<div class="stat-box-inner">
				<h1>{$completed_ticket_cnt}</h1>
				<p><b>Completed Tickets</b></p>
				<p>{$active_ticket_cnt} remain</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="box box-style">
		<div class="box-title">
	  		<h3>Activity</h3>
	  	</div>
		<ul>
	  	{foreach from=$activities item=activity}
    		<li><p {if $activity.type=="login"}class="green"{/if}><b>{$activity.timestamp}</b> - {$activity.activity_text}</p></li>
		{/foreach}
		</ul>
	</div>

	<div class="box box-style">
		<div class="box-title">
	  		<h3>My Tickets</h3>
	  	</div>
		<table class="t2">
			  	{foreach from=$tickets item=ticket}
		 		<tr>
			  		<td>#{$ticket.ticket_id}</td>
			  		<td>{$ticket.title}</td>
			    	<td>{$ticket.description}</td>
			    	<td>{$ticket.status}</td>
			    	<td>{$ticket.priority}</td>
		    	</tr>
				{/foreach}
			</table>
	</div>		
	
	<div class="clear"></div>

{/block}