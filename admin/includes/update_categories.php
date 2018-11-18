<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="cat-title">Ubah Kategori</label><br>
        <?php
          if (isset($_GET['edit'])) {
            $cat_id = $_GET['edit'];
            $query = "SELECT * FROM categories WHERE cat_id = {$cat_id}";
            $select_categories_id = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_categories_id)) {
              $cat_id = $row['cat_id'];
              $cat_title = $row['cat_title'];
              $cat_image = $row['cat_image'];
              ?>
            <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" type="text" class="form-control" name="cat_title"><br>
            <label for="cat_image">Gambar Kategori</label><br>
    <img width ="100" src="../img/kategori/<?php echo $cat_image;?>" alt="" name="cat_image">
    <br><br>
    <input type="file" name="cat_image">
          <?php }}

        ?>
        <?php //update query
          if (isset($_POST['update_category'])) {
            $the_cat_title = $_POST['cat_title'];
            $cat_image = $_FILES['cat_image']['name'];
      $cat_image_temp = $_FILES['cat_image']['tmp_name'];
     move_uploaded_file($cat_image_temp, "../img/kategori/$cat_image");
     if (empty($cat_image)) {
    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
    $select_image = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_array($select_image)) {
      $cat_image = $row['cat_image'];
    }
  }
            $query = "UPDATE categories SET cat_title = '{$the_cat_title}', cat_image = '{$cat_image}' WHERE cat_id = '{$cat_id}'";
            $update_query = mysqli_query($connection,$query);
            if (!$update_query) {
              die("QUERY FAILED" . mysqli_error($connection));
            }
          }
        ?>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Ubah Kategori">
    </div>
</form>
