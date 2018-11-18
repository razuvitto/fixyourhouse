
<!-- Color Bars (above header)-->
  <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
  
      <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span3 logo">
          <a href="index.php"><img src="img/test.png" alt="" /></a>
            <!-- <h5>Fix Your Own House With Your Own Hands</h5> -->
        </div>
        <div class="span4 navigation">
          <div class="input-append">
                    <form action="search.php" method="post">
                        <input id="appendedInputButton" size="20" type="text" placeholder="Pencarian" name="search" style="height: 30px; width: 350px;"><button style="height: 40px;" class="btn" type="submit" name="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span5 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="<?php if($currentPage =='beranda'){echo 'active';}?>"><a href="index.php">Beranda</a></li>
            <li class="<?php if($currentPage =='telusuri'){echo 'active';}?>"><a href="explore.php">Telusuri</a></li>

       
        <?php
        if (isset($_SESSION['is_logged_in'])) { ?>
        <li class="<?php if($currentPage =='tulis_artikel'){echo 'active';}?>"><a href="user_artikel.php">Tulis Artikel</a></li>
        <?php
        }
        else
        {
          ?>
          <li class="<?php if($currentPage =='tulis_artikel'){echo 'active';}?>"><a href="#login" data-toggle="modal">Tulis Artikel</a></li>
        <?php  }            
          
          ?>
            <li class="<?php if($currentPage =='saran'){echo 'active';}?>"><a href="suggestion.php">Saran</a></li>
         <!--    <li class="<?php if($currentPage =='login'){echo 'active';}?>"><a href="#login" data-toggle="modal">Login</a></li> -->
         <?php

        if (isset($_SESSION['is_logged_in'])) {
          if (isset($_SESSION['user_role'])) {
              $username = $_SESSION['username'];
              $roles = $_SESSION['user_role'];
              if ($roles == 1) {
                  ?><li class=""><a href="admin/index.php">Menu Admin</a></li> <?php 
              } else if ($roles == 2) {
                 ?><li class=""><a href="logout.php"><?php echo $username; ?> (Logout)</a></li> <?php 
              }
          }
             
        } else {
            ?> <li class="<?php if($currentPage =='login'){echo 'active';}?>"><a href="#login" data-toggle="modal">Login</a></li><?php
        }
 ?>
            <!-- Login Modal -->
            <form action="login_process.php" method="post" role="form">
            <div class="modal hide fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel" style="text-align: center;">Login</h3>
              </div>
              <div class="modal-body" style="text-align: center;">
                <!-- <h5>Anda perlu login untuk dapat menulis artikel</h5> -->
           <!--      <div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Oh tidak ! Anda perlu login untuk dapat menulis artikel.</strong> 
                </div> -->
                <div class="form-group">
                  <input style="margin-left: 11px; margin-top: 5px;height: 30px;width: 250px;" type="text" class="form-control" name="username" required="required" placeholder="Username">
                  <br>
                  <input style="margin-left: 11px; margin-top: 5px;height: 30px;width: 250px;" type="password" class="form-control" placeholder="Password" name="user_password">
                </div>
              </div>
              <div class="modal-footer">
                <a href="#register" role="button" class="btn" data-toggle="modal" data-dismiss="modal" aria-hidden="true">Belum Punya Akun ?</a>
                <button type="submit" class="btn btn-inverse" value="Login" name="login">Login</button>
              </div>
            </div>
          </form>

            <!-- Register Modal -->
            <form action="register_process.php" method="post" role="form">
            <div class="modal hide fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel" style="text-align: center;">Register</h3>
              </div>
              <div class="modal-body" style="text-align: center;">
                <div class="form-group">
                  <input style="margin-left: 11px; margin-top: 5px;height: 30px;width: 250px;" type="text" class="form-control" name="username" required="required" placeholder="Username">
                  <br>
                  <input style="margin-left: 11px; margin-top: 5px;height: 30px;width: 250px;" type="email" class="form-control" name="user_email" required="required" placeholder="Email">
                  <br>
                  <input style="margin-left: 11px; margin-top: 5px;height: 30px;width: 250px;" type="password" class="form-control" placeholder="Password" name="user_password">
                </div>
              </div>
              <div class="modal-footer">
                <a href="#login" role="button" class="btn" data-toggle="modal" data-dismiss="modal" aria-hidden="true">Sudah Punya Akun ?</a>
                <button type="submit" class="btn btn-inverse" value="Login" name="daftar">Daftar</button>
              </div>
            </div>
          </form>

            
           <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
  <ul class="dropdown-menu" style="left: auto; right: 0;">
    <form style="height: 150px;width: 300px;" class="navbar-form navbar-left" role="search" method="post" action="">
      <div class="form-group">
        <input style="margin-left: 11px; margin-top: 5px;height: 20px;width: 175px;" type="text" class="form-control" name="username" required="required">
        <input style="margin-left: 11px; margin-top: 5px;height: 20px;width: 175px;" type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-default" name="submit_login">Login</button>
      <button type="submit" class="btn btn-default">Belum Punya Akun?</button>
    </form>
  </ul>
</li> -->
            </ul>
            
 
            </div>
</div>
        </div> <!-- End Header -->
 