<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Avocado Project</title>
</head>
<body>
  <div id="container">
    <?php
        if (isset($_SERVER['HTTP_REFERER'])) {
            print "The page you were on previously was {$_SERVER['HTTP_REFERER']}<br />";
        } else {
            print "You didn't click any links to get here<br />";
        }
    ?>
    <a href="http://localhost:7888">Here</a>

    <?php
      require './header.php';
    ?>
    <?php
      require './main.php';
    ?>
    <?php
      require './footer.php';
    ?>
  </div>

<script>
var xhr = new XMLHttpRequest();
xhr.open('GET', 'http://localhost:7888/server.php');
xhr.addEventListener('load', function (data) {
  console.log('data', data.target.response);
});
xhr.send();

</script>
</body>
</html>