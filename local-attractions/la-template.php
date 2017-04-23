<?php include '../../includes/meta.php'; ?>
<?php include '../../includes/header.php'; ?>
<main class="main container">
  <?php
    include '../local-attractions.php';
    $title = $local_attractions[$index]['title'];
    $image = '<img src="' . $local_attractions[$index]['image'] . '" alt="' . $title . '">';
    $description = $local_attractions[$index]['description'];
    echo '<div class="hero-image">' . $image . '</div> <h1>' . $title . '</h1>' . $description;
  ?>
</main>
<?php include '../../includes/footer.php'; ?>
<?php include '../../includes/closing.php'; ?>
