<?php 
  include __DIR__.'/../utils/connect.php';
  $mysqli = connectToDatabase();
  $query = "SELECT ingredient, product FROM `ingredients_products`";
  $result = $mysqli->query($query);
  $rows = array();
  while($r = $result->fetch_assoc()) {
    $rows[] = $r;
  }
  // $rows is my assoc array with all my stuff
  print print_r($rows[0]);
?>
<div id="ingredients">
  <?php 
    for ($i = 0; $i < count($rows); $i++) {
      ?>
        <div class="item">
          <div class="ingredient">
            <p><?=$rows[$i]['ingredient']?></p>
          </div>
          <div class="product">
            <p><?=$rows[$i]['product']?></p>
          </div>
        </div>
      <?php
    }
  ?>
  <script>
    var item = document.getElementsByClassName('item');
    for (var i = 0; i < item.length; i++) {
      console.log(item[i]);
    }
  </script>
</div>









<!-- <div id="ingredients">

</div>
<script>
  var formData = new FormData();

  var xhr = new XMLHttpRequest();
  xhr.addEventListener('load', function (data) {
    // Life on the edge
    data = JSON.parse(data.target.response);
    document.getElementById('ingredients');

  });
  xhr.open('GET', "http://localhost:7888/modules/endpoints/ingredients.php");
  xhr.send();
</script> -->