<?php

$string_as_json = '
    {
        "profesor" : {
            "ime" : "Kristijan",
            "prezime" : "Gjorevski",
            "vozrast" : 30,
            "jazici" : [
                "PHP", "SQL", "JavaScript"
            ]
        }
    }
';

$json_encode = json_decode($string_as_json);

// echo '<pre>';
// print_r($json_encode);
// echo '</pre>';



$json_obj = json_encode($string_as_json);

echo '<pre>';
print_r($json_obj);
echo '</pre>';