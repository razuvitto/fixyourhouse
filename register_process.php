<?php
	session_start();
	include_once('functions.php');
// WHEN NO SESSION named 'is_logged_in'?
	IF(!isset($_SESSION['is_logged_in'])){
	redirect('login.php');
}
// retrieve posted form DATA
	$username= $_POST['username'];
	$user_email= $_POST['user_email'];
	$user_password= $_POST['user_password'];
	$user_role= $_POST['user_role'];

        //Mengambil Data Query dari Database
$DATABASE = NEW mysqli('127.0.0.1', 'root', '', 'fixyourhouse');
$QUERY  =  "INSERT  INTO  users(username,user_email, user_password, user_role) VALUES('$username','$user_email','$user_password',2)";
$statement = $DATABASE->PREPARE($QUERY);
$statement->bind_param('ssi', $username, $password, $role);
$statement->EXECUTE();
?>
 <div class="alert alert-success" style="text-align: center;">
                       Registrasi Akun Sukses !
                      </div> 
<?php
// Ketika barang sudah ditambah maka akan kembali ke halaman barang.php
redirect('index.php');

?>
