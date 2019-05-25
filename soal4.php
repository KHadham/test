<?php
function cetak_gambar($row){
	if ($row %2 == "0"){
	exit('eeee gabisa,harus pake ganjil'); 
	//program hanya berjalan jika tidak memenuhi syarat if di atas
	}
	else
	for ($i = 1; $i <= $row; $i++){  
		for ($j = 1; $j <= $row; $j++){  
		    if ( $i==1 ||$i==$row|| $j == ($row/2)+0.5){
		    echo " x ";
		    }
        	    else{
             echo " =";
             }
        }  
        echo "<br>"; 
    }  
}
cetak_gambar(7);
