<?php
$mat1=array(array(1,2,8),
	     array(4,5,6),
             array(7,8,3));
$mat2=array(array(2,1,1),
	    array(1,2,1),
	    array(1,1,2));

echo"<h2>Matrix1</h2>";
for($row=0;$row<3;$row++)
	{
		echo "<br>";
		for($col=0;$col<3;$col++)
		{
			echo"".$mat1[$row][$col];
		}
	}
echo"<h2>Matrix2</h2>";
for($row=0;$row<3;$row++)
	{
		echo "<br>";
		for($col=0;$col<3;$col++)
		{
			echo"".$mat2[$row][$col];
		}
	}
$result = array();
for($row=0; $row<=2; $row++) {
    for($col=0; $col<=2; $col++) {
        $result[$row][$col] = $mat1[$row][$col] * $mat2[$row][$col];
    }
}
echo"<h2>result</h2>";
for($row=0;$row<3;$row++)
	{
		echo "<br>";
		for($col=0;$col<3;$col++)
		{
			echo"".$result[$row][$col];
		}
	}
