<?php
session_start();
  include "includes/db.php";
function make_query()
{
    global $connection;
    $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";
    $result = mysqli_query($connection, $query);
    return $result;
}

function make_slides()
{
    global $connection;
 $output = '';
 $count = 0;
 $result = make_query();
 while($row = mysqli_fetch_array($result))
 {
    
  $output = '
    <img src="img/cover/'.$row["post_image"].'" alt="'.$row["post_title"].'" style="width:770px; height:354px;"/>
   <div class="carousel-caption">
    <h3>'.$row["post_title"].'</h3>
   </div>
  ';
 }
 return $output;
}
  // include "functions.php";
 ?>

<?php
    $currentPage = 'beranda';
    include "includes/header.php";
?>

<?php
    include "includes/navigation.php";
?>    
     
    <div class="row headline"><!-- Begin Headline -->

            <!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><img src="img/Carousel/sld_1.jpg" alt="slider" /></li>
                <li><img src="img/Carousel/sld_2.jpg" alt="slider" /></li>
                <li><img src="img/Carousel/sld_3.jpg" alt="slider" /></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
            <h2 style="margin:-6px 0;">Fix Your Own House With </br> Your Own Hands</h2>
            <p class="lead" style="font-size: 15px; text-align: justify;">FixYourHouse merupakan sebuah website yang ditujukan untuk membantu para orang-orang khususnya ibu rumah tangga yang kesulitan atau memiliki masalah dengan peralatan atau perabot di rumah dengan cara memberikan tutorial berupa artikel dan video yang dapat memberikan petunjuk bagaimana cara menyelesaikan permasalahan tersebut dengan tanpa bantuan tukang.</p>
            <!-- <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu orci rutrum aliquam.</p> -->
            <a href="explore.php"><button class="btn btn-large btn-warning" type="button" style="color: #ffffff;text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);background-color: #d8450b;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
    background-image: -webkit-linear-gradient(top, #d8450b, #d8450b);
    background-image: -o-linear-gradient(top, #d8450b, #d8450b);
    background-image: linear-gradient(to bottom, #d8450b, #d8450b);
    background-image: -moz-linear-gradient(top, #d8450b, #d8450b);
    background-repeat: repeat-x;
    border-color: #d8450b;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);">Telusuri Artikel</button></a>
           
        </div>
  
     	<!-- Slider Carousel
        ================================================== -->
        <!-- <div class="span12">
            <div class="flexslider">
              <ul class="slides">
                <?php echo make_slides(); ?> -->
                <!-- <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li> -->
              <!-- </ul> -->
              
            <!-- </div> -->
        <!-- </div> -->
        
    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h3 class="title-bg">Kategori 
                <!-- <small>That we are most proud of</small> -->
            </h3>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
<?php 
    $query = "SELECT * FROM categories ";
   $category = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($category)) {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];
                    $cat_image = $row['cat_image'];
?>
                    <!-- Gallery Item -->
                    <li  class="span3 gallery-item">
                        <a href="category.php?category=<?php echo $cat_id; ?>"><img src="img/kategori/<?php echo $cat_image; ?>" alt="Gallery"></a>
                        <!-- <span class="category-details"><a href="category.php?category=<?php echo $cat_id; ?>" style="font-size: 18px;"><?php echo $cat_title; ?></a><br>For an international ad campaign.</span> -->
                    </li>
                     <?php } ?>          
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    </div> <!-- End Container -->

   
<?php
    include "includes/footer.php";
?>