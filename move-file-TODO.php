<?php
// @TODO
?>
<?php include 'includes/header.php' ?>
<?= $message ?>
<form method="POST" action="move-file.php" enctype="multipart/form-data">
  <label for="image"><b>Upload file:</b></label>
  <input type="file" name="image" accept="image/*" id="image"><br>
  <input type="submit" value="upload">
</form>
<?php include 'includes/footer.php' ?>