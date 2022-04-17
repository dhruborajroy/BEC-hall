<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($str){
	global $con;
	$str=mysqli_real_escape_string($con,$str);
	return $str;
}

function redirect($link){
	?>
	<script>
	window.location.href='<?php echo $link?>';
	</script>
	<?php
	die();
}

function send_email($email,$html,$subject){
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="hackerdhrubo99@gmail.com";
	$mail->Password="Dhrubo123Dhrubo";
    $mail->setFrom('hackerdhrubo99@gmail.com', 'Dhrubo');
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject=$subject;
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "done";
	}else{
		//echo "Error occur";
	}
}

function rand_str(){
	$str=str_shuffle("abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz");
	return $str=substr($str,0,15);
	
}

function get_content($URL){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $URL);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
function vailidatePayment($tran_id){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, "https://sandbox.sslcommerz.com/validator/api/merchantTransIDvalidationAPI.php?tran_id='$tran_id'&store_id=".STORE_ID."&store_passwd=".STORE_PASSWORD."&format=json");
	$data = curl_exec($ch);
	curl_close($ch);
	$data=json_decode($data,1);
	return $data;
}

  
function isAdmin(){
	if(!isset($_SESSION['ADMIN_LOGIN'])){
	?>
		<script>
		window.location.href='./login.php';
		</script>
		<?php
	}
}
function isUSER(){
	if(!isset($_SESSION['USER_LOGIN'])){
	?>
		<script>
		window.location.href='./login.php';
		</script>
		<?php
	}
}
function getTotalApplication(){
	global $con;
	$sql="SELECT count(DISTINCT id) as number FROM applicants ";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function getPaidAmount($id){
	global $con;
	$sql="SELECT sum(amount) as number FROM payment where user_id='$id' ";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function getApplication($id){
	global $con;
	$sql="SELECT count(id) as number FROM applicants where userId='$id' ";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function getUsers(){
	global $con;
	$sql="SELECT count(DISTINCT id) as number FROM users ";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function getPayments(){
	global $con;
	$sql="SELECT count(DISTINCT id) as number FROM payment";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function getTotalPayments(){
	global $con;
	$sql="SELECT sum(amount) as number FROM payment";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['number'];
	}
} 
function gettotalstudent(){
	global $con;
	$sql="SELECT count(DISTINCT id) as student FROM students";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['student'];
	}
} 
function gettotalteacher(){
	global $con;
	$sql="SELECT count(DISTINCT id) as teacher FROM teachers";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['teacher'];
	}
}
function getmycourse($id){
	global $con;
	$sql="SELECT count(DISTINCT id) as course FROM enorll where user_id='$id'";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
	  return $row['course'];
	}
} 
?>