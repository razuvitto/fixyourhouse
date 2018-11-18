<?php
session_start();
  include "includes/db.php";
  // include "functions.php";
 ?>

 <!-- pagination -->
 <?php
   $perpage = 12;
   if(isset($_GET['page']) & !empty($_GET['page'])){
     $curpage = $_GET['page'];
   }else{
     $curpage = 1;
   }
   $start = ($curpage * $perpage) - $perpage;
   $PageSql = "SELECT * FROM posts";
   $pageres = mysqli_query($connection, $PageSql);
   $totalres = mysqli_num_rows($pageres);

   $endpage = ceil($totalres/$perpage);
   $startpage = 1;
   $nextpage = $curpage + 1;
   $previouspage = $curpage - 1;

   // $ReadSql = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $start,$perpage";
   // $res = mysqli_query($connection, $ReadSql);
 ?>

<?php
$currentPage = 'telusuri';
    include "includes/header.php";
?>

<?php
    include "includes/navigation.php";
?> 
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span8 gallery">

            <h3 class="title-bg">Telusuri Artikel 
                <!-- <small>That we are most proud of</small> -->
            </h3>

        <!--     <ul id="filterOptions" class="gallery-cats clearfix">
                <li class="active"><a href="#" class="all">All</a></li> 
                <li><a href="#" class="illustration">Illustration</a></li>
                <li><a href="#" class="design">Design</a></li>
                <li><a href="#" class="video">Video</a></li>
                <li><a href="#" class="web">Web</a></li>
            </ul> -->

            

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">
                     <?php

                     if (isset($_GET['category'])) {
                      $post_category_id = $_GET['category'];
                    }

                   $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id ORDER BY post_id DESC LIMIT $start,$perpage";
                   $search_category = mysqli_query($connection,$query);

                   if (!$search_category) {
                     die("QUERY FAILED " . mysqli_error($connection));
                   }

                   $count = mysqli_num_rows($search_category);
                   if ($count == 0) {
                     echo "<h1 style='text-align:center;'> TIDAK ADA HASIL </h1>";
                   }

                   else {
          while ($row = mysqli_fetch_assoc($search_category)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    // $post_author = $row['post_author'];
                    // $post_tags = $row['post_tags'];
                    $post_image = $row['post_image'];
                    // $post_content = substr($row['post_content'], 0,180);
        ?>
                    <!-- Gallery Item -->
                    <li  class="span2 gallery-item">
                        <a href="post.php?p_id=<?php echo $post_id;?>"><img style="height: 139px; width: 170px;" src="img/cover/<?php echo $post_image; ?>"></a>
                        <span class="category-details">
                            <a href="post.php?p_id=<?php echo $post_id;?>" style="font-size: 13px;"><?php echo $post_title ?></a>
                        </span>
                    </li>
                    <?php } 
                }
            ?>          
                </ul>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <?php if($curpage != $startpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>
    <?php } ?>
    <?php if($curpage >= 12){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
    <?php } ?>
    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    <?php if($curpage != $endpage){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
                </ul>
            </div>

        </div><!-- End gallery list-->
<?php 
    include "includes/sidebar.php";
?>
            </div>
    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
  <?php
    include "includes/footer.php";
?>