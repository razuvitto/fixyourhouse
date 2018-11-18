<?php
  include "includes/db.php";
 
session_start();
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
                
              <form action="login_process.php" method="post" role="form">
                <h3 class="title-bg">Login</h3>
                <div class="post-content">
                  
                    <div class="post-body">

                       <!-- <h4><p>Sarankan artikel dengan mengisi form di bawah ini : </p></h4> -->
                             <div class="form-group">
    <label for="username">Username  <input style="margin-left: 50px;
margin-top: 5px;" type="text" class="form-control" name="username" required="required"></label>
    
  </div>
   <div class="form-group">
    <label for="user_password">Password  <input style="margin-left: 53px;
margin-top: 5px;" type="password" class="form-control" name="user_password" required="required"></label>
    
  </div>
  Belum Punya Akun? <a href="register.php">Daftar</a>
  <br>
                    <br>
                    <div class="row">
                            <div class="span4">
                                <input style="width: 337px; height: 50px; font-size: 22px;" type="submit" class="btn btn-inverse" value="Login" name="login">
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