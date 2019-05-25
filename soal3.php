<?php
function carivokal($string){
    return preg_match_all('/[aeiou]/i',$string,$matches);
}
echo carivokal('aaaaa');
