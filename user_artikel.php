<?php
session_start();
  include "includes/db.php";
  include "functions.php";
  if(!isset($_SESSION['is_logged_in'])){
    redirect('login.php');
  }
 ?>

<?php
$currentPage = 'tulis_artikel';
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
                
              <form action="" method="post" role="form" enctype="multipart/form-data">
                <h3 class="title-bg">Menulis Artikel</h3>
                <div class="post-content">
                  
                    <div class="post-body">

                      <?php
                  if (isset($_POST['create_artikel'])) {
                    $user_post_title = $_POST['user_post_title'];
                    $user_post_category_id = $_POST['user_post_category_id'];
                    $username = $_SESSION['username'];
                    $user_post_date = date('d-m-y');
                    $user_post_image = $_FILES['user_post_image']['name'];
                    $user_post_image_temp = $_FILES['user_post_image']['tmp_name'];
                    $user_post_tags = $_POST['user_post_tags'];
                    $user_post_content = $_POST['user_post_content'];

                     move_uploaded_file($user_post_image_temp, "img/user_posts/$user_post_image");

                    $query = "INSERT INTO user_posts(user_post_category_id,user_post_title,user_post_author,user_post_date,user_post_image,user_post_content,user_post_tags)";
                    $query .= "VALUE ({$user_post_category_id},'{$user_post_title}','{$username}',now(),'{$user_post_image}','{$user_post_content}','{$user_post_tags}')";
                    $create_artikel_query = mysqli_query($connection,$query);
                    if (!$create_artikel_query) {
                      die('QUERY FAILED ' . mysqli_error($connection));
                    }
                    else{
                      ?> 
                      <div class="alert alert-success" style="text-align: center;">
                        <strong>
                        Terima kasih atas artikel yang Anda kirimkan ! Kami akan mengirimkan pemberitahuan ke email Anda jika artikel tersebut sudah ditulis.</strong>
                      </div> 
                      <?php
                    }
                  }
                 ?>

                       <h4><p>Tulis artikel dengan mengisi form di bawah ini : </p></h4>
                       <div class="form-group">
    <label for="saran_content">Topik Artikel  <input style="margin-left: 57px;
margin-top: 5px; width: 400px;" type="text" class="form-control" name="user_post_title" required="required"></label>
    
  </div>
  <div class="form-group">
    <label for="categories">Kategori   <select style="margin-left: 80px;
margin-top: 5px;" name="user_post_category_id" required="required" id="">
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
 <!--    <div class="form-group">
    <label for="saran_email">Penulis  <input style="margin-left: 87px;
margin-top: 5px;" type="text" class="form-control" name="user_post_author" required="required"></label>
    
  </div> -->
  <div class="form-group">
    <label for="saran_email">Artikel Tags  <input style="margin-left: 60px;
margin-top: 5px; width: 300px;" type="text" class="form-control" name="user_post_tags" required="required"></label>
    
  </div>
  <div class="form-group">
    <label for="post_image">Gambar Artikel <input style="margin-left: 39px; " type="file" name="user_post_image"></label>
  </div>  
  <br>
  <div class="form-group">
    <label for="user_post_content">Isi Artikel</label>
 
    <textarea name="user_post_content" id="user_post_content" cols="30" rows="10">
    </textarea>
  </div>

  <br>
                    <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Kirim Artikel" name="create_artikel">
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
<script>
  CKEDITOR.replace('user_post_content', {
    filebrowserBrowseUrl : './admin/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : './admin/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : './admin/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : './admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : './admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : './admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
  });
  </script>
</div>