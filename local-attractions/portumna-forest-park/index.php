<?php include '../../includes/meta.php'; ?>
<?php include '../../includes/header.php'; ?>
<main class="main container">

  <?php
    include '../local-attractions.php';
    echo $local_attractions['0']['description'];
  ?>

</main>
<?php include '../includes/footer.php'; ?>
<?php include '../includes/closing.php'; ?>
