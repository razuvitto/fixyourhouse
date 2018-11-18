<?php
  function confirm($result){
    global $connection;
    if (!$result) {
      die("QUERY FAILED" . mysqli_error($connection));
    }
  }

  function insert_categories(){
    global $connection;
    if (isset($_POST['submit'])) {
      $cat_title = $_POST['cat_title'];
      $cat_image = $_FILES['cat_image']['name'];
      $cat_image_temp = $_FILES['cat_image']['tmp_name'];
     move_uploaded_file($cat_image_temp, "../img/kategori/$cat_image");
      if ($cat_title == "" || empty($cat_title)) {
        echo "This field should not be empty";
      }
      else {
        $query = "INSERT INTO categories(cat_title,cat_image)";
        $query .= "VALUE('{$cat_title}','{$cat_image}')";
        $create_category_query = mysqli_query($connection,$query);
        if (!$create_category_query) {
          die('QUERY FAILED' . mysqli_error($connection));
        }
      }
    }
  }
?>

<?php //find all categories
  function findAllCategories(){
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select_categories)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      $cat_image = $row['cat_image'];
      echo "<tr>";
      echo "<td>{$cat_id}</td>";
      echo "<td>{$cat_title}</td>";
      echo "<td><img width='200' height='100' src='../img/kategori/$cat_image' alt='cat_image'></td>";
      echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
      echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
      echo "</tr>";
    }
  }
?>

<?php //delete query
function deleteCategories(){
  global $connection;
  if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
    $delete_query = mysqli_query($connection,$query);
    header("Location: categories.php");
  }
}

function deletePosts(){
  global $connection;
  if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
    $delete_query = mysqli_query($connection,$query);
    header("Location: ./posts.php");
  }
}


function deleteUserPosts(){
  global $connection;
  if (isset($_GET['delete'])) {
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM user_posts WHERE user_post_id = {$the_post_id}";
    $delete_query = mysqli_query($connection,$query);
    header("Location: ./user_artikel.php");
  }
}

function deleteComments(){
  global $connection;
  // $query = "SELECT * FROM posts";
  // $select_posts = mysqli_query($connection,$query);
  // while ($row = mysqli_fetch_assoc($select_posts)) {
  //           $post_id = $row['post_id'];
  //         }
  if (isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
    $delete_query = mysqli_query($connection,$query);
    // $query2 = "UPDATE posts SET post_comment_count = post_comment_count - 1 ";
    // $query2 .= "WHERE post_id = $post_id ";
    // $update_comment_count = mysqli_query($connection,$query2);
      header("Location: ./comments.php");
  }
}

function unapproveComments(){
  global $connection;
  $query = "SELECT * FROM posts";
  $select_posts = mysqli_query($connection,$query);
  while ($row = mysqli_fetch_assoc($select_posts)) {
            $post_id = $row['post_id'];
          }
  if (isset($_GET['unapprove'])) {
    $the_comment_id = $_GET['unapprove'];
    $querycom = "SELECT * FROM comments";
    $select_com = mysqli_query($connection,$querycom);
    while ($row = mysqli_fetch_assoc($select_com)) {
            $comment_post_id = $row['comment_post_id'];
          }
    $query = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id = $the_comment_id";
    $unapprove_query = mysqli_query($connection,$query);
    $query2 = "UPDATE posts SET post_comment_count = post_comment_count - 1 ";
    $query2 .= "WHERE post_id = $comment_post_id ";
    $update_comment_count = mysqli_query($connection,$query2);
      header("Location: ./comments.php");
  }
}

function approveComments(){
  global $connection;
  $query = "SELECT * FROM posts";
  $select_posts = mysqli_query($connection,$query);
  while ($row = mysqli_fetch_assoc($select_posts)) {
            $post_id = $row['post_id'];
          }
  
  if (isset($_GET['approve'])) {
    $the_comment_id = $_GET['approve'];
    $querycom = "SELECT * FROM comments";
    $select_com = mysqli_query($connection,$querycom);
    while ($row = mysqli_fetch_assoc($select_com)) {
            $comment_post_id = $row['comment_post_id'];
          }
    $query = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $the_comment_id";
    $approve_query = mysqli_query($connection,$query);
    $query2 = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
    $query2 .= "WHERE post_id = $comment_post_id ";
    $update_comment_count = mysqli_query($connection,$query2);
      header("Location: ./comments.php");
  }
}

function get_title($_title) {
    return('<title>' . $_title . '</title>');
}

function redirect($_location) {
    header('Location: ' . $_location);
}

function deleteSuggestions(){
  global $connection;
  if (isset($_GET['delete'])) {
    $saran_id = $_GET['delete'];
    $query = "DELETE FROM suggestions WHERE saran_id = {$saran_id}";
    $delete_query = mysqli_query($connection,$query);
      header("Location: ./suggestions.php");
  }
}

?>
