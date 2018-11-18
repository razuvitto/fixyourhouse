<!-- Header -->
<?php
  include "includes/admin_header.php";
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
                      <h1 class="page-header">
                          Menu User Artikel
                          <!-- <small>Author</small> -->
                      </h1>
                      <?php
                        if (isset($_GET['source'])) {
                          $source = $_GET['source'];
                        }
                        else {
                          $source = '';
                        }
                        switch ($source) {
                          case 'add_post':
                            include "includes/add_post.php";
                            break;
                          case 'view_user_artikel':
                            include "includes/view_user_artikel.php";
                            break;
                          default:
                            include "includes/view_all_user_artikel.php";
                            break;
                        }

                      ?>
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
