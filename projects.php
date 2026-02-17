<!DOCTYPE html>
<html lang="en">
<?php include 'htmlComponents/head.php'; ?>
  <body>
    <?php include 'htmlComponents/header.php'; include_once 'constants.php'; 
    
    foreach (PROJECTS as $project) { 
        $project->display();
    }
    ?>
  </body>
</html>
