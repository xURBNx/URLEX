<html>
	<head>
		<title>URL Expander</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

		<script type="text/javascript">
			$(window).load(function(){
				
			});
			$(document).ready(function(){
				$('#submitbtn').click(function(){
				
					$('#loader').fadeIn('medium');
					$.post('get_url.php', { url: $('#url').val() }, function(data) {
						$('#loader').fadeOut('medium', function(){
							$('#result').html('<span>Original URL:</span><br /> <a id="orig_url" target="_blank" href="' + data + '">' + data + '</a>');
							$('#result').slideDown();
						});
					});
				});
			});
		</script>
		
		<style type="text/css">
		
			body
			{
				font-family:Helvetica, Arial, Courier;
			}
			#logo
			{
				margin:0px auto;
				width:298px;
				height:55px;
				background:url('expandurl_logo.png');
				position:relative;
				margin-top:200px;
			}
			
			#my_form
			{
				width:290px;
				margin:0px auto;
				position:relative;
				padding-left:4px;
				text-align:center;
			}
			
			input[type=text]
			{
				width:290px;
				margin-top:10px;
				font-family:Helvetica, Arial, Courier;
				color:#232323;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				font-size:24px;
			}
			
			#submitbtn
			{
				
				-webkit-border-radius: 8px;
				-moz-border-radius: 8px;
				border-radius: 8px;
				font-size:24px;
				padding:15px;
				background:#98cb00;
				border:0px;
				color:#ffffff;
				margin:0px auto;
				margin-top:10px;
				cursor:pointer;
				width:130px;
			}
			
			#submitbtn:hover
			{
				background:#676767;
			}
			
			#result
			{
				background:#faf8ee;
				padding:10px 0px;
				border-bottom:2px solid #fbeea0;
				text-align:center;
				width:100%;
				display:none;
				position:absolute;
				top:0px;
				left:0px;
			}
			
			#result span
			{
				 color:#618200; 
				 font-family:Helvetica; Arial; 
				 font-size:12px; 
				 font-weight:bold;
				 
			}
			
			#result a
			{
				font-size:24px;
				color:#0098cb;
			}
			
			#loader
			{
				display:none;
				width:128px;
				height:15px;
				background:url('load.gif');
				margin:0px auto;
				margin-top:10px;
			}
		
		</style>

	</head>
	<body>

		<div id="logo"></div>
	
		<form method="post" id="my_form" action="index.php">
			<input type="text" name="url" id="url" />
			<div id="submitbtn">EXPAND</div>
		</form>
		
		<div id="loader"></div>
		<div id="result"></div>

	</body>
</html>





	