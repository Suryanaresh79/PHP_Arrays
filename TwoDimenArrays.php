<?php
$marks = array("Naresh" => array("maths" => 50, "stats" => 60, "comp" => 70), 
               "Ramesh" => array("maths" => 46, "stats" => 50, "comp" => 60));

echo "Marks for Naresh in maths: ".$marks['Naresh']['maths'];
echo "\nMarks for Naresh in stats: ".$marks['Naresh']['stats'];
echo "\nMarks for Naresh in comp: ".$marks['Naresh']['comp'];
echo "\nMarks for Ramesh in maths: ".$marks['Ramesh']['maths'];
echo "\nMarks for Ramesh in stats: ".$marks['Ramesh']['stats'];
echo "\nMarks for Ramesh in comp: ".$marks['Ramesh']['comp'];
?>