<!DOCTYPE html>
<html >
  <head>
    <?php require_once "header.php" ?>
  </head>

  <body>
    <div id="front">
      <?php include "navigation.php" ?>
      <div id="main">
          <div class="typing">
              <h1>Cindy Ah Kioon</h1>
              <h2>Front end developer</h2>
          </div>
          <div class="bounce">
            <a href="#about"><i id="bounce" class="fa fa-2x fa-chevron-circle-down"></i></a>
          </div>
      </div>
      <div class="container-fluid">
        <?php require_once "about.php" ?>
        <?php require_once "portfolio.php" ?>
        <?php require_once "contact.php" ?>
      </div>
      <?php require_once "footer.php" ?>
    </div>
  </body>
</html>
