
{extends file="layout.tpl"}
{block name=main-title}Profile{/block}
{block name=content}

		 	<h3>Profile</h3>
		 	<hr/>
		 	<p>Name: {$user.first_name} {$user.last_name}</p>
		 	<p>Email: {$user.email}</p>
		 	<p>Level:{$user.level}</p>
{/block}