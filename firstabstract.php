<?php
abstract class first{
	function fun()
	{
		$a=21;
		$b=23;
		$add=$a+$b;
		echo $add;
	}
}
class child extends first{

}
$obj=new child();
$obj->fun();
?>