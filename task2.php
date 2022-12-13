
<?php
$colors = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[2] . " carpet, the " . $colors[1] . " lawn, the " . $colors[0] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo "<ul>
<li> " . $colors[0] . " </li>
<li> " . $colors[1] . " </li>
<li> " . $colors[2] . " </li>
</ul>";


$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach ($cities as $key => $value){
    // $arr[3] will be updated with each value from $arr...
    echo "The capital of " . $key . "is " . $value . "<br>"; 
}
echo "<h2>use Current function</h2>";
$color1 = array (4 => 'white', 6 => 'green', 11=> 'red');
echo current($color1) . "<br>";


$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n" . "<br>";


$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");

asort($fruits);

foreach($fruits as $y=>$y_value)
{
echo $y." = ".$y_value." <br>";
}

// var_dump($fruits)


$tem=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = array_sum($tem)/count($tem);
echo $average;
echo "<br>";

sort($tem);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
    echo $tem[$i].", ";
}
echo "<br>";
$length = count($tem);
echo " List of seven highest  temperatures:";
for ($i=($length -7); $i< $length; $i++)
{ 
    echo $tem[$i].", ";
}
echo "<hr>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "</pre>";
echo "<br>";
echo "<hr>";

// 9

$colors = array("red","blue", "white","yellow");
$newarray=[];

print_r($colors);
echo "<br>";

foreach($colors as $value):
    $value = strtoupper($value);
    array_push($newarray,$value);
    
endforeach;
print_r($newarray);
echo "<hr>";

// 10

$colorss = array("RED","BLUE", "WHITE","YELLOW"); 
$newarray2=[];
foreach($colorss as $value):
  $value = strtolower($value);
  array_push($newarray2,$value);

endforeach;
print_r($newarray2);
echo "<hr>";

// 11

for ($i = 200 ; $i <250 ;$i+=4){
    echo $i . ",";
    
}
echo "<hr>";
// 12
$max=0;
$min=1000;
$words =  array("abcd","abc","de","hjjj","g","wer");
for ($i = 0 ; $i < count($words); $i++){
$a= strlen($words[$i]);
$l= strlen($words[$i]);
if ($l<$min){
    $min =$l;
    $z=$i;
  

} 
if ($a>$max){
    $max =$a;
    $q=$i;
   
}

} echo "The shortest  array length is $l and value is $words[$z] " ;
    echo "<br>"; 
    echo "The longest array length is $a and value is $words[$q] ";
    echo "<br>";
    echo "<hr>";

    // 13
for ($i=0;$i<=10;$i++){
    echo rand(11,20).",";
}
    // 14
    echo "<br>";
    echo "<br>";
    $array1 = array( 2, 0, 10, 12, 6);
    $arr2=[0];
    echo min(array_diff($array1, $arr2))
?>