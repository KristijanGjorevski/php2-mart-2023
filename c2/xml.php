<?php

$xml_string = "
<proffesor>
    <name>Kristijan</name>
    <lastname>Gjorevski</lastname>
    <age>30</age>
    <email>kikogjorevski@gmail.com</email>
</proffesor>
";

// echo $xml_string;

// $obj = simplexml_load_string($xml_string);
// $obj = simplexml_load_string($xml_string,true);

// echo $obj->age;

// echo '<pre>';
// print_r($xml_string);
// echo '</pre>';

$xml_string2 = "
<classroom>
    <proffesor>
        <name>Kristijan</name>
        <lastname>Gjorevski</lastname>
        <age>30</age>
        <email>kikogjorevski@gmail.com</email>
    </proffesor>
    <proffesor>
        <name>Milan</name>
        <lastname>Ajdovski</lastname>
        <age>27</age>
        <email>Milan.A@gmail.com</email>
    </proffesor>
</classroom>
";

// echo '<pre>';
// print_r($xml_string2);
// echo '</pre>';


$obj = simplexml_load_string($xml_string2);

echo '<pre>';
print_r($obj);
echo '</pre>';

foreach($obj as $item){
    echo '<li>'. $item->name .'</li>';
    echo '<li>'. $item->lastname .'</li>';
    echo '<li>'. $item->age .'</li>';
}