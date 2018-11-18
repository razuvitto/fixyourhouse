<!-- Header -->

<?php
  include "includes/admin_header.php";
  // session_start();
 ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
          include "includes/admin_navigation.php";
        ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                               <?php

        if (!isset($_SESSION['is_logged_in']) || ($_SESSION['user_role'] == 2)) {
    redirect('../login.php');
    exit;
}
        ?>
                        <h1 class="page-header">
                            Selamat Datang di Menu Admin
                            <!-- <small>Author</small> -->
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>




        <!-- /#page-wrapper -->

<!-- footer -->
<?php
  include "includes/admin_footer.php";
?>
