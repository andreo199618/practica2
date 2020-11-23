<?php



$con = 0;
$in = 1;
$n1 = 5;

function Divisible(int $in, int $con, int $n1):int{

	if($in%$n1==0){
		$con++;
		echo $con;

	}else if($con<10){
		$in++;
		echo $in;
	}

};
echo var_dump(Divisible($con,$in,$n1));







