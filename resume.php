<!DOCTYPE html>
<html lang="en">
<?php include 'htmlComponents/head.php'; include_once 'constants.php' ?>
  <body>
    <?php include 'htmlComponents/header.php'; ?>

    <h1 style="text-align:center" class="mt-5"><?php echo FULL_NAME  ?></h1>

    <ul class='nav justify-content-center'>
        <li class="nav-item mx-1">
            <?php echo PHONE ?>
        </li>
        <li class="nav-item mx-1">
          |
        </li>
        <li class="nav-item mx-1">
            <?php echo EMAIL ?>
        </li>
        <li class="nav-item mx-1">
          |
        </li>
         <li class="nav-item mx-1">
            <?php echo LOCATION ?>
        </li>
        <li class="nav-item mx-1">
          |
        </li>
         <li class="nav-item mx-1">
            <a href='<?php echo LINKED_IN ?>'>LinkedIn</a>
        </li>
    </ul>

    <div class="container mt-5">
      <h4>PROFESSIONAL EXPERIENCE</h4>
      <hr />
    </div>



  </body>
</html>