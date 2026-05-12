<?php 
// @TODO
?>
<?php include 'includes/header.php' ?>

<?= $message ?>
<form method="POST" action="upload-file.php" enctype="multipart/form-data">
  <label for="image"><b>Upload file:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="Upload">
</form>

<?php include 'includes/footer.php' ?>