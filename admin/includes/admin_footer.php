</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="./ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'post_content', {
    filebrowserBrowseUrl : './ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : './ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : './ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
  });
  </script>
</body>

</html>
