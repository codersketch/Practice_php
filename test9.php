<?php 
// switch statement 

$weekDay = 5;

switch ($weekDay) {
	case 1:
		echo "today is Monday";
		break;
	case 2:
		echo "today is Tuesday";
		break;
	case 3:
		echo "today is Wednesday";
		break;
	case 4:
		echo "today is Thusday";
		break;
	case 5:
		echo "today is Friday";
		break;
	case 6:
		echo "today is Saturday";
		break;
	case 7:
		echo "today is Sunday";
		break;
	
	default:
		echo "enter valid weekDay";
}

$per = 100;

switch (true) {
	case ($per >= 90 && $per <= 100):
		echo "you are  in 'A+' grade";
		break;
	case ($per >= 80 && $per <= 90):
		echo "you are  in 'A' grade";
		break;
	case ($per >= 70 && $per <= 80):
		echo "you are  in 'B+' grade";
		break;
	case ($per >= 60 && $per <= 70):
		echo "you are  in 'B' grade";
		break;
	case ($per >= 50 && $per <= 60):
		echo "you are  in 'C+' grade";
		break;
	case ($per >= 40 && $per <= 50):
		echo "you are  in 'C+' grade";
		break;
	case ($per >= 30 && $per <= 40):
		echo "you are  in 'D' grade";
		break;
	case ($per < 30):
		echo "you are faild";
		break;
	default:
		echo "Please enter your valid parcesntage";
}
?>