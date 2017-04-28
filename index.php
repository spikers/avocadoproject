<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Avocado Project</title>
  <link rel="stylesheet" href="./static/css/style.css" />
</head>
<body>
  <div id="container">
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