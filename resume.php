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

      <div class="mb-5">
        <div>
          <h5>Amazon Application Development Special Interest Group Member</h5>
          <p class="mb-0">Amazon | Monee, IL | January 2023 - Current</p>
        </div>
        <ul>
          <li>I develop and support internal tools to be used by Amazon's IT organization.</li>
          <li>I built an Accomplishment Tracker application using React and Python. The site is hostes on AWS.</li>
        </ul>

      </div>

      <h4>EDUCATION</h4>
      <hr />
      <div class="mb-5">
        <div class="mb-3">
          <h5>Western Governors University</h5>
          <p class="mb-0">Bachelor of Science in Software Engineering | Salt Lake City, UT | March 2023 - November 2025</p>
        </div>
         <div>
          <h5>Southwestern Illinois College</h5>
          <p class="mb-0">Associate of Science in Computer Information Systems | Belleville, IL | June 2011 - December 2012</p>
        </div>
    </div>

     <h4>Skills</h4>
     <hr />
      <ul>
        <li>Programming Languages: Python, JavaScript, PHP, SQL</li>
        <li>Frameworks and Libraries: React, Flask, Django</li>
        <li>Tools and Platforms: AWS, Git, Docker</li>
        <li>Soft Skills: Problem-solving, Communication, Teamwork</li>
      </ul>

  </body>
</html>