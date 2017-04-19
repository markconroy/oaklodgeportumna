<?php include '../../includes/meta.php'; ?>
<?php include '../../includes/header.php'; ?>
<main class="main container">

  <?php
    $index = 0;
    include '../local-attractions.php';
    echo '<h1>' . $local_attractions[$index]['title'] . '</h1>';
    echo $local_attractions[$index]['description'];
  ?>

</main>
<?php include '../../includes/footer.php'; ?>
<?php include '../../includes/closing.php'; ?>
