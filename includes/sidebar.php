<div class="span4 sidebar">

            <!--Search-->
<!--             <section>
                <div class="input-append">
                    <form action="search.php" method="post">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Search" name="search"><button style="height: 40px;" class="btn" type="submit" name="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section> -->

            <!--Categories-->
            <h5 class="title-bg" style="margin-top: 0px;">Kategori</h5>
            <ul class="post-category-list">
              <?php
                      // $query = "SELECT * FROM categories LIMIT 3";
                      $query = "SELECT * FROM categories";
                      $select_categories_sidebar = mysqli_query($connection,$query);
                      while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                                  $cat_title = $row['cat_title'];
                                  $cat_id = $row['cat_id'];
                                  echo "<li><a href='category.php?category=$cat_id'><i class='icon-plus-sign'></i>{$cat_title}</a></li>
                                  ";
                                }
                   ?>
             <!--    <li><a href="#"><i class="icon-plus-sign"></i>Design</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Illustration</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Tutorials</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>News</a></li> -->
            </ul>

            <!--Popular Posts-->
            <h5 class="title-bg">Artikel Terbaru</h5>
            <ul class="popular-posts">
              <?php
                      // $query = "SELECT * FROM categories LIMIT 3";
                      $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";
                      $select_recent = mysqli_query($connection,$query);
                      while ($row = mysqli_fetch_assoc($select_recent)) {

                                  $post_title = $row['post_title'];
                                  $post_id = $row['post_id'];
                                  $post_date = date('d-m-y');
                                  $post_image = $row['post_image'];
                                  echo "<li>
                                  <a href='post.php?p_id=$post_id'>
                                    <img src='img/cover/$post_image' style='width:70px;height:70px;'>
                                  </a>
                                  <h6>
                                    <a href='post.php?p_id=$post_id'>{$post_title}</a>
                                  </h6>
                                  <em>
                                    Diposting pada {$post_date}
                                  </em>
                                  ";

                                }
                   ?>
                <!-- <li>
                    <a href="blog-single.htm"><img src="img/gallery/gallery-img-2-thumb.jpg"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                <li>
                    <a href="blog-single.htm"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                    <em>Posted on 09/01/15</em>
                <li>
                    <a href="blog-single.htm"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                    <em>Posted on 09/01/15</em>
                </li> -->
            </ul>

            <h5 class="title-bg">Kontak</h5>
            <address style="margin-left: 5px;">
            <strong>FixYourHouse</strong><br>
            Institut Teknologi Del<br>
            Jl. Sisingamangaraja, Sitoluama<br>
            Sumatera Utara, Indonesia : 22381<br>
            Telp : (+62) 821-6580-3007<br>
            <a href="mailto:#">fixyourhouse@gmail.com</a>
            </address>
            <ul class="social-icons">
                        <!-- <li style="margin-left: -21px;"><a href="#" class="social-icon facebook"></a></li> -->
                        <li style="margin-left: -21px;"><a href="https://www.youtube.com/channel/UCC-cdMmIkJnJiebAhf9SZdQ"><img src="img/Untitled-yt.png"></a></li>
                        <!-- <li><a href="#" class="social-icon dribble"></a></li> -->
                        <!-- <li><a href="#" class="social-icon rss"></a></li> -->
                        <!-- <li><a href="#" class="social-icon forrst"></a></li> -->
                    </ul>
        </div>

    </div>