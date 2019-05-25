<?php
function str_replace_buatan($word,$find,$replace){

	//strlen menghitung panjang kata 
	for($i=0; $i<strlen($word); $i++){
		
		if( $word[$i]==$find){
            $word[$i]=$replace;
        }
	}
	return $word;
}

echo str_replace_buatan('saya suka sama situ sebab situ suka sama saya','s','m');
