<?php
		
	function expandShortUrl($url) {

		$headers = get_headers($url,1);
		
		if (!empty($headers['Location'])) 
		{
			$headers['Location'] = (array) $headers['Location'];
			$url = array_pop($headers['Location']);
		}
		
		return $url;
	}
	
	
	
	echo expandShortUrl($_POST['url']);

?>