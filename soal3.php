<?php
function carivokal($string){
	
	return preg_match_all('/[aeiou]/',$string);
	
}

echo carivokal('kokoro no tomo');
