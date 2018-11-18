<?php
session_start();
  include "includes/db.php";
include_once('functions.php');
  if(isset($_SESSION['is_logged_in'])){
  if (isset($_SESSION['user_role'])) {
              $roles = $_SESSION['user_role'];
              if ($roles == 1) {
                  redirect('admin/index.php');
              } else if ($roles == 2) {
                  redirect('index.php');
              // } else if ($roles == 3) {
                  // redirect('topup_delflazz.php');
              }
          }
}

if (isset($_SESSION['login'])) {
    $error = $_SESSION['login'];
    echo $error;
}
 ?>

<?php
$currentPage = 'login';
    include "includes/header.php";
?>

<?php
    include "includes/navigation.php";
?> 
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <!-- Blog Full Post
        ================================================== --> 
        <div class="span8 blog">

          

            <!-- Blog Post 1 -->
            <article>
                
              <form action="" method="post" role="form">
                <h3 class="title-bg">Registrasi</h3>
                <div class="post-content">
                  
                    <div class="post-body">

                      <?php
                  if (isset($_POST['daftar'])) {
                    $username = $_POST['username'];
                    $user_email = $_POST['user_email'];
                    $user_password = $_POST['user_password'];
                    // $user_role = $_POST['user_role'];


                    $query = "INSERT INTO users(username,user_email,user_password,user_role)";
                    $query .= "VALUE ('$username','$user_email','$user_password',2)";
                    $create_akun_query = mysqli_query($connection,$query);
                    if (!$create_akun_query) { ?>
                       <div class="alert alert-error" style="text-align: center;">
                        <strong>
               Registrasi Akun Anda Gagal, Coba Ulangi Lagi.</strong>
            </div><?php
                      // die('QUERY FAILED ' . mysqli_error($connection));
                    }
                    else{
                      ?> 
                      <div class="alert alert-success" style="text-align: center;">
                         <strong>
                        Registrasi Akun Anda Sukses !</strong>
                      </div> 
                      <?php
                    }
                  }
                 ?>

                       <!-- <h4><p>Sarankan artikel dengan mengisi form di bawah ini : </p></h4> -->
                             <div class="form-group">
    <label for="username">Username  <input style="margin-left: 50px;
margin-top: 5px;" type="text" class="form-control" name="username" required="required"></label>
    
  </div>
  <div class="form-group">
    <label for="user_email">Alamat Email  <input style="margin-left: 33px;
margin-top: 5px;" type="email" class="form-control" name="user_email" required="required"></label>
    
  </div>
   <div class="form-group">
    <label for="user_password">Password  <input style="margin-left: 53px;
margin-top: 5px;" type="password" class="form-control" name="user_password" required="required"></label>
    
  </div>
  Sudah Punya Akun? <a href="login.php">Login</a>
  <br>
                    <br>
                    <div class="row">
                            <div class="span4">
                                <input style="width: 337px; height: 50px;  font-size: 22px;" type="submit" class="btn btn-inverse" value="Daftar" name="daftar">
                            </div>
                        </div>
                    
                </div>
                 </form> 
              
            </article>

    
        </div><!--Close container row-->

        <!-- Blog Sidebar
        ================================================== --> 
        <?php 
    include "includes/sidebar.php";
?>

    </div>
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	<?php
    include "includes/footer.php";
?>

                   
   
  </div>