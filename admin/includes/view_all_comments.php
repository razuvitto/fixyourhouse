<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Author</th>
          <th>Email</th>
          <th>Comment</th>
          <th>In Response to</th>
          <th>Date</th>
          <th>Status</th>
          <th>Approval</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM comments";
          $select_comments = mysqli_query($connection,$query);
            if(mysqli_num_rows($select_comments)>0)
          {
          
          while ($row = mysqli_fetch_assoc($select_comments)) {
            $comment_id = $row['comment_id'];
            $comment_post_id = $row['comment_post_id'];
            $comment_author = $row['comment_author'];
            $comment_email = $row['comment_email'];
            $comment_content = $row['comment_content'];
            $comment_status = $row['comment_status'];
            $comment_date = $row['comment_date'];
            echo "<tr>";
              echo "<td>$comment_id</td>";
              echo "<td>$comment_author</td>";
              echo "<td>$comment_email</td>";
              echo "<td>$comment_content</td>";

              // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
              // $select_categories_id = mysqli_query($connection,$query);
              // while ($row = mysqli_fetch_assoc($select_categories_id)) {
              //   $cat_id = $row['cat_id'];
              //   $cat_title = $row['cat_title'];
              //
              // echo "<td>{$cat_title}</td>";
              // }
              $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
              $select_post_id_query = mysqli_query($connection,$query);
              while ($row = mysqli_fetch_assoc($select_post_id_query)) {
                  $post_id = $row['post_id'];
                  $post_title = $row['post_title'];
                  echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
              }

              echo "<td>$comment_date</td>";
              echo "<td>$comment_status</td>";
              if ($comment_status == "Approved") {
                 echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</td>";
              }
              else {
                echo "<td><a href='comments.php?approve=$comment_id'>Approve</td>";
              }
              
              // echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Approve</td>";
              echo "<td><a href='comments.php?delete=$comment_id' onclick='return checkDelete()'>Delete  </td>";
            echo "</tr>";
          }
        }
        else{

         ?>
         <tr>
        <th colspan="10" style="text-align: center;">There's No data found !!!</th>
        </tr>
        <?php
        }
        ?>
      </tbody>
</table>

<?php
  approveComments();
  unapproveComments();
  deleteComments();
?>
