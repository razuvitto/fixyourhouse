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
                           Menu Kategori
                            
                        </h1>
                        <div class="col-xs-6">
                          <?php
                              insert_categories();
                           ?>
                          <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="cat-title">Tambah Kategori</label><br>
                                  <input type="text" class="form-control" name="cat_title">
                              </div>
                              <div class="form-group">
                                  <label for="cat_image">Gambar Kategori</label>
                                  <input type="file" name="cat_image">
                                </div>
                              <div class="form-group">
                                  <input class="btn btn-primary" type="submit" name="submit" value="Tambah Kategori">
                              </div>
                          </form>

                          <?php
                            if (isset($_GET['edit'])) {
                              $cat_id = $_GET['edit'];
                              include "includes/update_categories.php";
                            }
                          ?>

                        </div>
                        <div class="col-xs-6">
                          <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php deleteCategories(); ?>
                              <?php findAllCategories(); ?>

                            </tbody>
                          </table>

                        </div>

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
