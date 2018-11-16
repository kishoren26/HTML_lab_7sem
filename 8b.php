<?php
$trans=array(array(1,2,9),
	     array(4,5,6),
             array(7,8,3));
echo "<h2>MATRIX</h2>";
for($row=0;$row<3;$row++)
	{
		echo "<br>";
		for($col=0;$col<3;$col++)
		{
			echo"".$trans[$row][$col];
		}
	}

echo "<h2>Transpose of matrix </h2>";
for($row=0;$row<3;$row++)
{
	echo "<br>";
	for($col=0;$col<3;$col++)
	{
		echo"".$trans[$col][$row];
	}
}
