 <?php 
 if (isset($_POST['submit'])&& $_POST['hesoa'] !=''&& $_POST['hesob'] !=''&& $_POST['hesoc'] !='') {
 	$a = $_POST['hesoa'];
 	$b = $_POST['hesob'];
 	$c = $_POST['hesoc'];
 	$delta = $b*$b - 4*$a*$c;
 	if ($a == 0 && $b == 0 && $c == 0) {
 		echo "Phương trình có vô số nghiệm";
 	}else {
 		if ($delta < 0) {
 			echo "Phương trình vô nghiệm";
 		} else if ($delta == 0) {
 			$x = - $b/(2*$a);
 			echo "Phuong trình có một nghiệm là x = ". $x;
 		}else {
 			$candelta = sqrt($delta);
 			$x1 = (-$b * $candelta)/(2*$a);
 			$x2 = (-$b - $candelta)/(2*$a);
 			echo "Phương trình có 2 nghiệm là: x1= ". $x1. " và x2 = ".$x2;
 		}
 	}
 }else {
 	header("location: index.php");
 }
  ?>