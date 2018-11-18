<?php
session_start();
include_once('functions.php');
include_once('includes/db.php');

if(isset($_SESSION['is_logged_in'])){
	if (isset($_SESSION['user_role'])) {
              $roles = $_SESSION['user_role'];
              if ($roles == 1) {
                  redirect('admin/index.php');
              } else if ($roles == 2) {
                  redirect('index.php');
          
              }
          }
}
$username = $_POST['username'];
$user_password = $_POST['user_password'];

$query = 'SELECT * FROM users WHERE username=? AND user_password=?';
$statement = $connection->prepare($query);
$statement->bind_param('ss', $username, $user_password);
$statement->execute();
$result_set = $statement->get_result();


if($result_set->num_rows){
    $_SESSION['is_logged_in'] = TRUE;
    $_SESSION['username'] = $username;
    $result = mysqli_query($connection,"SELECT * FROM users WHERE username='$username' AND user_password='$user_password'");
    $row = mysqli_fetch_array($result);
    $_SESSION['user_role'] = $row['user_role'];
    if (isset($_SESSION['user_role'])) {
              $roles = $_SESSION['user_role'];
              if ($roles == 1) {
                  redirect('admin/index.php');
              } else if ($roles == 2) {
                  redirect('index.php');
           }
          }

}
    redirect('login.php');
?>
