<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<title>{block name=title}Ticket Tracker System{/block}</title>
			<link rel="stylesheet" href="css/style.css" />
			<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
			{include file="navigation.tpl"}
			
			<div id="container" class="container">	
				<div id="page-title">
					<h1>{block name=main-title}Blank{/block}</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				{block name=content}{/block}
			</div>
			
		</body>
	</html>
