<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Author</th>
          <th>Title</th>
          <th>Category</th>
          <th>Image</th>
          <th>Tags</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM user_posts";
          $select_posts = mysqli_query($connection,$query);
           if(mysqli_num_rows($select_posts)>0)
          {
          while ($row = mysqli_fetch_assoc($select_posts)) {
            $user_post_id = $row['user_post_id'];
            $user_post_author = $row['user_post_author'];
            $user_post_title = $row['user_post_title'];
            $user_post_category_id = $row['user_post_category_id'];
            // $post_status = $row['post_status'];
            $user_post_image = $row['user_post_image'];
            $user_post_tags = $row['user_post_tags'];
            $user_post_date = $row['user_post_date'];
            // $post_content = $row['post_content'];
            echo "<tr>";
              echo "<td>$user_post_id</td>";
              echo "<td>$user_post_author</td>";
              echo "<td>$user_post_title</td>";

              $query = "SELECT * FROM categories WHERE cat_id = {$user_post_category_id}";
              $select_categories_id = mysqli_query($connection,$query);
              while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

              echo "<td>{$cat_title}</td>";
            }

              // echo "<td>$post_status</td>";
              echo "<td><img width='100'  src='../img/user_posts/$user_post_image' alt='image'></td>";
              echo "<td>$user_post_tags</td>";
              echo "<td>$user_post_date</td>";
              echo "<td><a href='user_artikel.php?source=view_user_artikel&p_id={$user_post_id}'>View</td>";
              echo "<td><a href='user_artikel.php?delete={$user_post_id}' onclick='return checkDelete()'>Delete</td>";
            echo "</tr>";
          }
        }
          else{
            ?>
            <tr>
        <th colspan="9" style="text-align: center;">There's No data found !!!</th>
        </tr>
        <?php
        }
        ?>

      </tbody>
</table>

<?php
  deleteUserPosts();
?>
