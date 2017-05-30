<!DOCTYPE html>
<html >
  <head>
    <meta name="google-site-verification" content="kKMib8sLVE47nP2RAGmpdT_vHdNbVTFcOpmb0-rj2YM" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100087061-1', 'auto');
        ga('send', 'pageview');
    </script>
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
            <a href="#about"><i id="bounce" class="fa fa-3x fa-chevron-circle-down"></i></a>
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
