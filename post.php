<?php
session_start();
  include "includes/db.php";
  // include "functions.php";
 ?>

<?php
$currentPage = 'telusuri';
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
                <?php
                  if (isset($_GET['p_id'])) {
                    $the_post_id = $_GET['p_id'];
                  } 
                  $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                  $select_all_posts = mysqli_query($connection,$query);
                  while ($row = mysqli_fetch_assoc($select_all_posts)) {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_tags = $row['post_tags'];
                    $post_image = $row['post_image'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_content = $row['post_content'];

                    ?>

                <h3 class="title-bg"><?php echo $post_title ?></h3>
                <div class="post-content">
                    <!-- <a href="#"> --><img style="width: 400px; height: 247px; margin-left: 20px;
margin-top: 15px; margin-bottom: -15px;" src="img/cover/<?php echo $post_image; ?>" alt="Post Thumb"></a>

                    <div class="post-body">
                        <p><?php echo $post_content ?></p>
                        <!-- <p class="well"><a href="#" rel="tooltip" title="An important message">Proin tristique</a> tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                       <p> Nam sit amet felis non lorem faucibus rhoncus vitae id dui. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                       <blockquote>
                            Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat.
                       </blockquote>

                       <p>Nam sit amet felis non lorem faucibus rhoncus vitae id dui.Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p> -->
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> <?php echo $post_date ?></li>
                            <li><i class="icon-user"></i> <a href="#"> <?php echo $post_author ?></a></li>
                            <li><i class="icon-comment"></i> <a href="#"><?php echo $post_comment_count ?> Komentar</a></li>
                            <li><i class="icon-tags"></i> <a href="#"><?php echo $post_tags ?></a></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </article>

            <!-- About the Author -->
  <!--           <section class="post-content">
                <div class="post-body about-author">
                    <img src="img/author-avatar.jpg" alt="author">
                    <h4>About Nathan Brown</h4>
                    Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.
                </div>
            </section> -->

        <!-- Post Comments
        ================================================== -->

         <?php
                  if (isset($_POST['create_comment'])) {
                    $the_post_id = $_GET['p_id'];
                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = $_POST['comment_content'];

                    $query = "INSERT INTO comments(comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date)";
                    $query .= "VALUE ($the_post_id,'{$comment_author}','{$comment_email}','{$comment_content}','Unapproved',now())";
                    $create_comment_query = mysqli_query($connection,$query);
                    if (!$create_comment_query) {
                      die('QUERY FAILED ' . mysqli_error($connection));
                    }
                    else{
                      ?> 
                      <div class="alert alert-success" style="text-align: center;">
                        <strong>
                        Komentar telah terkirim dan menunggu persetujuan admin ! </strong>
                      </div> 
                      <?php
                    }
                    // $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                    // $query .= "WHERE post_id = $the_post_id ";
                    // $update_comment_count = mysqli_query($connection,$query);
                  }
                 ?> 
            <section class="comments">
                <!-- Comment Form -->
                <div class="comment-form-container">
                    <h4>Tinggalkan Komentar : </h4>
                    <form action="" method="post">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Nama" required="required" name="comment_author">
                        </div>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="email" placeholder="Alamat Email" required="required" name="comment_email">
                        </div>
                        <textarea class="span6" name="comment_content" required="required"></textarea>
                        <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Kirim Komentar" name="create_comment">
                            </div>
                        </div>
                    </form>
                </div>
          <!--       <h4 class="title-bg"><a name="comments"></a><?php echo $post_comment_count;?> Komentar</h4> -->
               <ul>
                 <?php
                    $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                    $query .= "AND comment_status = 'Approved' ";
                    $query .= "ORDER BY comment_id DESC ";
                    $select_comment_query = mysqli_query($connection,$query);
                    if (!$select_comment_query) {
                      die('QUERY FAILED ' . mysqli_error($connection));
                    }
                    while ($row = mysqli_fetch_array($select_comment_query)) {
                      $comment_date = $row['comment_date'];
                      $comment_content = $row['comment_content'];
                      $comment_author = $row['comment_author'];
                      ?>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name"><?php echo $comment_author; ?> </span>
                        <span class="comment-date"> <?php echo $comment_date; ?> | <a href="#">Reply</a></span>
                        <div class="comment-content"><?php echo $comment_content; ?></div>
                        <!-- Reply -->
                        <!-- <ul>
                            <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                             <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                         </ul> -->
                    </li>       
                    <?php } ?>             
               </ul>
            
                
        </section><!-- Close comments section-->

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