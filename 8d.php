<?php
$trans = array(
array(1,2,9),
array(3,4,9),
array(5,6,9));
$trans1 = array(
array(1,2,3),
array(4,5,6),
array(7,8,9));
echo "<h2> matrix </h2>";
for($row=0;$row<3;$row++){
echo "<br>";
for($col=0;$col<3;$col++){
echo " ".$trans[$row][$col];
}
}
echo "<h2> matrix </h2>";
for($row=0;$row<3;$row++){
echo "<br>";
for($col=0;$col<3;$col++){
echo " ".$trans1[$row][$col];
}
}
$r=count($trans);
$c=count($trans1[0]);
$p=count($trans1);
if(count($trans[0]) != $p){
    echo "Incompatible matrices";
    exit(0);
}
$result=array();
for ($i=0; $i < $r; $i++){
    for($j=0; $j < $c; $j++){
        $result[$i][$j] = 0;
        for($k=0; $k < $p; $k++){
            $result[$i][$j] += $trans[$i][$k] * $trans1[$k][$j];
        }
    }
}
echo "<h2> multiplication of 2 matrices </h2>";
for($row=0;$row<3;$row++){
echo "<br>";
for($col=0;$col<3;$col++){
echo " ".$result[$row][$col];
}
}
?>
