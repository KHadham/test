<?php
function betweendate($date1,$date2){
	
	//konversi waktu ke unix time
    $converted1 = strtotime($date1);  
    $converted2 = strtotime($date2); 
	//86400 jummlah detik dalam 1 hari
    for ($i=$converted1; $i<=$converted2; $i+=86400) {  
        echo date("Y-m-d", $i).'<br />';  
        }
    };
//gunakan standar waktu ISO 8601 dengan format YYYY-MM-DD
echo betweendate('2019-01-01','2019-01-05');
