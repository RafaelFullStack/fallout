<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- For Internet Explorer-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PipBoy</title>
    <link rel="icon" href="images/boy.ico">
    <link rel="stylesheet" href="scss/main.css">
  </head>
  <body>
    <div class="container">
      <div class="overlay-container"></div>
        <div class=screen>
          <div class="screen-reflection"></div>
            <?php include("header.php");?>
            <div class="cores-display">
              <!-- core display: stat-statussection-->
              <?php include("stat_status.php");?>
              <!-- core display: stat-special section-->
              <?php include("stat_special.php")?>
              <!-- core display: exp-jobs section-->
              <?php include("exp_jobs.php")?>
              <!-- core display: exp-studies section-->
              <?php include("exp_studies.php")?>
              <!--core display: exp-skills section-->
              <?php include("exp_skills.php")?>
              <!--core display: data section-->
              <?php include("data.php")?>
              <!--core display: map section-->
              <?php include("map.php")?>
              <!--core display: color section-->
              <?php include("color.php")?>
            </div>
            <?php include("bottom.php")?>
        </div>
    </div>
    <script src="js/tabs.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/tabs.js"></script>
  </body>
</html>
