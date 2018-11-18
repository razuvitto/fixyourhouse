<?php
session_start();
  include "includes/db.php";
  // include "functions.php";
 ?>

<?php
$currentPage = 'saran';
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
                <h3 class="title-bg">Sarankan Topik Untuk Artikel</h3>
                <div class="post-content">
                  
                    <div class="post-body">

                      <?php
                  if (isset($_POST['create_saran'])) {
                    $saran_category_id = $_POST['saran_category'];
                    $saran_email = $_POST['saran_email'];
                    $saran_content = $_POST['saran_content'];

                    $query = "INSERT INTO suggestions(saran_category_id,saran_email,saran_date,saran_content)";
                    $query .= "VALUE ({$saran_category_id},'{$saran_email}',now(),'{$saran_content}')";
                    $create_saran_query = mysqli_query($connection,$query);
                    if (!$create_saran_query) {
                      die('QUERY FAILED ' . mysqli_error($connection));
                    }
                    else{
                      ?> 
                      <div class="alert alert-success" style="text-align: center;">
                        <strong>
                        Terima kasih atas saran yang Anda berikan ! Kami akan mengirimkan pemberitahuan ke email Anda jika artikel tersebut sudah ditulis.</strong>
                      </div> 
                      <?php
                    }
                  }
                 ?>

                       <h4><p>Sarankan artikel dengan mengisi form di bawah ini : </p></h4>
                             <div class="form-group">
    <label for="saran_email">Alamat Email  <input style="margin-left: 30px;
margin-top: 5px;width: 300px;" type="email" class="form-control" name="saran_email" required="required"></label>
    
  </div>
   <div class="form-group">
    <label for="saran_content">Topik Artikel  <input style="margin-left: 35px;
margin-top: 5px; width: 400px;" type="text" class="form-control" name="saran_content" required="required"></label>
    
  </div>
  <div class="form-group">
    <label for="categories">Kategori   <select style="margin-left: 58px;
margin-top: 5px;" name="saran_category" required="required" id="">
      <?php
        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connection,$query);
        // confirm($select_categories);
        echo "<option>--Pilih Kategori--</option>";
        while ($row = mysqli_fetch_assoc($select_categories)) {
          $cat_id = $row['cat_id'];
          $cat_title = $row['cat_title'];
          echo "<option value='$cat_id'>{$cat_title}</option>";
        }
      ?>
    </select></label>
                    </div>
                    <br>
                    <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Kirim Saran" name="create_saran">
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