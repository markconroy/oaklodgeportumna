<?php include '../includes/meta.php'; ?>
<?php include '../includes/header.php'; ?>
<main class="main container">
  <p>Galway's Portumna is a hive of activity and adventure all times of the year, catering for those who want to get out in the Great Outdoors, enjoy the arts with <a href="http://www.shorelinesartsfestival.com">Shorelines Arts Festival</a>, swim, run, cycle, hurl ... or just relax. Below is just a sample of what is on offer in this truly wonderful town on the River Shannon in East Galway.</p>

  <?php
    include 'local-attractions.php';
    foreach ($local_attractions as $local_attraction) {
      $title = '<h2>' . $local_attraction['title'] . '</h2>';
      $image = '<img src="' . $local_attraction['image'] . '" />';
      $description = '<p>' . $local_attraction['description'] . '</p>';
      echo $title . $image . $description;
    }
  ?>

</main>
