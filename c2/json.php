<?php

$string_as_json = '
    {
        "proffessors" :[
            {
                "ime" : "Kristijan",
                "prezime" : "Gjorevski",
                "vozrast" : 30,
                "jazici" : [
                    "PHP", "SQL", "JavaScript"
                ],
                "rabotno_iskustvo" : null
            },
            {
                "ime" : "Milan",
                "prezime" : "Ajdovski",
                "vozrast" : 27,
                "jazici" : [
                    "PHP", "SQL", "JavaScript"
                ],
                "rabotno_iskustvo" : null
            }
        ]
    }
';


$json_obj = json_decode($string_as_json,true);

$json_obj2 = json_encode($json_obj);


// echo '<pre>';
// print_r($json_obj);
// echo '</pre>';


foreach($json_obj['proffessors'] as $proffesor){ ?>
         <li><?= $proffesor['ime'] ?></li>';

<?php } ?>