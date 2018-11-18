<?php
if (isset($_GET['p_id'])) {
  $the_post_id = $_GET['p_id'];
}
$query = "SELECT * FROM user_posts WHERE user_post_id = {$the_post_id}";
$select_posts_by_id = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
  $user_post_id = $row['user_post_id'];
  $user_post_author = $row['user_post_author'];
  $user_post_title = $row['user_post_title'];
  $user_post_category_id = $row['user_post_category_id'];
  // $post_status = $row['post_status'];
  $user_post_image = $row['user_post_image'];
  $user_post_tags = $row['user_post_tags'];
  $user_post_date = $row['user_post_date'];
  $user_post_content = $row['user_post_content'];
}
// if (isset($_POST['update_post'])) {
//   $post_title = $_POST['post_title'];
//   $post_author = $_POST['post_author'];
//   $post_category_id = $_POST['post_category'];
//   // $post_status = $_POST['post_status'];

//   $post_image = $_FILES['image']['name'];
//   $post_image_temp = $_FILES['image']['tmp_name'];

//   $post_tags = $_POST['post_tags'];
//   $post_content = $_POST['post_content'];
//   // $post_date = date('d-m-y');
//   move_uploaded_file($post_image_temp, "../img/cover/$post_image");
//   if (empty($post_image)) {
//     $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
//     $select_image = mysqli_query($connection,$query);
//     while ($row = mysqli_fetch_array($select_image)) {
//       $post_image = $row['post_image'];
//     }
//   }
//   $query = "UPDATE posts SET ";
//   $query .= "post_title = '{$post_title}', ";
//   $query .= "post_category_id = '{$post_category_id}', ";
//   $query .= "post_date = now(), ";
//   $query .= "post_author = '{$post_author}', ";
//   // $query .= "post_status = '{$post_status}', ";
//   $query .= "post_tags = '{$post_tags}', ";
//   $query .= "post_content = '{$post_content}', ";
//   $query .= "post_image = '{$post_image}' ";
//   $query .= "WHERE post_id = {$the_post_id} ";
//   $update_post = mysqli_query($connection,$query);
//   confirm($update_post);
// }

?>
<!-- <form action="" method="post" enctype="multipart/form-data"> -->
  <div class="form-group">
    <label for="title">Post Title</label>
    <input value="<?php echo $user_post_title;?>" type="text" class="form-control" name="user_post_title">
  </div>
  <div class="form-group">
    <label for="author">Post Category</label>
    <?php
        $query = "SELECT * FROM categories WHERE cat_id = $user_post_category_id";
        $select_categories = mysqli_query($connection,$query);
        confirm($select_categories);
        $row = mysqli_fetch_assoc($select_categories);
        $cat_title = $row['cat_title'];?>
    <input value="<?php echo $cat_title;?>" type="text" class="form-control" name="user_post_author">
  </div>

  <div class="form-group">
    <label for="author">Post Author</label>
    <input value="<?php echo $user_post_author;?>" type="text" class="form-control" name="user_post_author">
  </div>
  <div class="form-group">
    <label for="user_post_image">Post Image</label><br>
    <img width ="100" src="../img/user_posts/<?php echo $user_post_image;?>" alt="" name="image">
    <br>
    <!-- <input type="file" name="image"> -->
  </div>
  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input value="<?php echo $user_post_tags;?>" type="text" class="form-control" name="user_post_tags">
  </div>
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea name="user_post_content" id="post_content" cols="30" rows="10"><?php echo $user_post_content; ?>

    </textarea>
  </div>
  <!-- <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
  </div> -->
<!-- </form> -->  
