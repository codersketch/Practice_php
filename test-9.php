<?php 
// switch statement 

$weekDay = 5;

switch ($weekDay) {
	case 1:
		echo "today is Monday <br>";
		break;
	case 2:
		echo "today is Tuesday <br>";
		break;
	case 3:
		echo "today is Wednesday <br>";
		break;
	case 4:
		echo "today is Thusday <br>";
		break;
	case 5:
		echo "today is Friday <br>";
		break;
	case 6:
		echo "today is Saturday <br>";
		break;
	case 7:
		echo "today is Sunday <br>";
		break;
	
	default:
		echo "enter valid weekDay <br>";
}

// also we can write ----------------

$number = 30;

switch ($number) {
	case ($number >= 90 && $number <= 100):
		echo "you are  in 'A+' grade";
		break;
	case ($number >= 80 && $number <= 90):
		echo "you are  in 'A' grade";
		break;
	case ($number >= 70 && $number <= 80):
		echo "you are  in 'B+' grade";
		break;
	case ($number >= 60 && $number <= 70):
		echo "you are  in 'B' grade";
		break;
	case ($number >= 50 && $number <= 60):
		echo "you are  in 'C+' grade";
		break;
	case ($number >= 40 && $number <= 50):
		echo "you are  in 'C' grade";
		break;
	case ($number >= 30 && $number <= 40):
		echo "you are  in 'D' grade";
		break;
	case ($number <= 30):
		echo "you are faild";
		break;
	
	default:
	echo "Please enter your valid parcesntage";
}

?>