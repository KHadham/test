<?php
function datadiri(){
    
    $identitas = array(
        'name'      => "Khadam Ikhwanus Shofa", 
        'address '  => "KP.rumbut ,rt12 r201,kelurahan pasir gunung selatan,cimanggis Depok",
        'hobbies '  => array("Berenang","Main Air","Diving"),
        'is_married'=> FALSE,
        "school"    => array (
            "highSchool" => "SMA muhammadiyah 1 Gombong",
            "university" => "-"
            ), 
        "skill"     => array(
            array(
                "name"  => "PHP",
                "score" => "65"
            ),
            array(
                "name"  => "HTML",
                "score" => "40"
            ),
            array(
                "name"  => "CSS",
                "score" => "30"
            ),
            array(
                "name"  => "JavaScript",
                "score" => "35"
            ),
        ),
    );
    return json_encode($identitas);
}
echo datadiri();
