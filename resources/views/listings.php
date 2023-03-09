<h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing):?>
    <h2><?php echo $listing['title'];?> </h2>
    <h2><?php echo $listing['description'];?> </h2>
<?php endforeach; ?>