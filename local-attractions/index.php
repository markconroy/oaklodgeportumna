<?php include '../includes/meta.php'; ?>
<?php include '../includes/header.php'; ?>
<main class="main container">
  <h1>Things to Do in/near Portumna, Co. Galway</h1>
  <p>Galway's Portumna is a hive of activity and adventure all times of the year, catering for those who want to get out in the Great Outdoors, enjoy the arts with <a href="http://www.shorelinesartsfestival.com">Shorelines Arts Festival</a>, swim, run, cycle, hurl ... or just relax. Below is just a sample of what is on offer in this truly wonderful town on the River Shannon in East Galway.</p>
  <div class="cards">
    <?php
      include 'local-attractions.php';
      foreach ($local_attractions as $local_attraction) {
        $title = '<h2 class="card--title">' . $local_attraction['title'] . '</h2>';
        $link = $local_attraction['link'];
        $image = '<img src="' . $local_attraction['image_thumbnail'] . '" />';
        $description = '<p>' . $local_attraction['description'] . '</p>';
        echo '<div class="card"><a href="/local-attractions' . $link . '">' . $title . $image . '</a></div>';
      }
    ?>
  </div>
</main>
<?php include '../includes/footer.php'; ?>
<?php include '../includes/closing.php'; ?>
