<table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Kategori</th>
          <th>Email</th>
          <th>Tanggal</th>
          <th>Saran</th>
          <th>Menu</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM suggestions";
        $select_suggestions = mysqli_query($connection,$query);
        if(mysqli_num_rows($select_suggestions)>0)
        {
          
          while ($row = mysqli_fetch_assoc($select_suggestions)) {
            $saran_id = $row['saran_id'];
            $saran_category_id = $row['saran_category_id'];
            $saran_email = $row['saran_email'];
            $saran_date = $row['saran_date'];
            $saran_content = $row['saran_content'];
            echo "<tr>";
              echo "<td>$saran_id</td>";

              $query = "SELECT * FROM categories WHERE cat_id = {$saran_category_id}";
              $select_saran_id_query = mysqli_query($connection,$query);
              while ($row = mysqli_fetch_assoc($select_saran_id_query)) {
                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];
                  echo "<td>$cat_title</td>";
              }
              

              echo "<td>$saran_email</td>";
              echo "<td>$saran_date</td>";
              echo "<td>$saran_content</td>";
              echo "<td><a href='suggestions.php?delete=$saran_id' onclick='return checkDelete()'>Hapus</td>";
            echo "</tr>";
          }
        }

        else{
          ?>
          

         <tr>
        <th colspan="6" style="text-align: center;">There's No data found !!!</th>
        </tr>
        <?php
        }
        ?>

      </tbody>
</table>

<?php
  deleteSuggestions();
?>
