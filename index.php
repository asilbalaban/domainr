<?php

	set_time_limit(0);

	function domain()
	{
		$sesli = ['a','e','i','o','u'];
		$sessiz = ['b','c','d','f','g','h','j','k','l','m','n','p','r','s','t','v','y','z'];

		$domain = '';
		$karakterSayisi = rand(4,6);
		for ($i=0;$i<$karakterSayisi;$i++) {
			if ($i%2==0) {
				$domain .= $sesli[array_rand($sesli)];
			} else {
				$domain .= $sessiz[array_rand($sessiz)];
			}

		}

		if ( @dns_get_record($domain.'.com', DNS_ALL) ) {
			$available = 'color: red;';
		}
		else {
			$available = 'color: black;';
		}

		echo '<h1 style=" '.$available.'  font-family: sans-serif; font-size:72px; text-align:center;">';
		echo '<a style="text-decoration: none; color: inherit;" href="kaydet.php?domain='.$domain.'">'.$domain.'</a>';
		echo '.com';
		echo '</h1>';
	}

	domain();
