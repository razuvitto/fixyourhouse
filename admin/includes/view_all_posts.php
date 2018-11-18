<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Author</th>
          <th>Title</th>
          <th>Category</th>
          <!-- <th>Status</th> -->
          <th>Image</th>
          <th>Tags</th>
          <th>Comments</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM posts";
          $select_posts = mysqli_query($connection,$query);
           if(mysqli_num_rows($select_posts)>0)
          {
          while ($row = mysqli_fetch_assoc($select_posts)) {
            $post_id = $row['post_id'];
            $post_author = $row['post_author'];
            $post_title = $row['post_title'];
            $post_category_id = $row['post_category_id'];
            // $post_status = $row['post_status'];
            $post_image = $row['post_image'];
            $post_tags = $row['post_tags'];
            $post_comment_count = $row['post_comment_count'];
            $post_date = $row['post_date'];
            // $post_content = $row['post_content'];
            echo "<tr>";
              echo "<td>$post_id</td>";
              echo "<td>$post_author</td>";
              echo "<td>$post_title</td>";

              $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
              $select_categories_id = mysqli_query($connection,$query);
              while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

              echo "<td>{$cat_title}</td>";
            }

              // echo "<td>$post_status</td>";
              echo "<td><img width='100'  src='../img/cover/$post_image' alt='image'></td>";
              echo "<td>$post_tags</td>";
              echo "<td>$post_comment_count</td>";
              echo "<td>$post_date</td>";
              echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</td>";
              echo "<td><a href='posts.php?delete={$post_id}' onclick='return checkDelete()'>Delete</td>";
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
  deletePosts();
?>
