<?php 
  include __DIR__.'/../utils/connect.php';
  $mysqli = connectToDatabase();
  $query = "SELECT ingredient, product FROM `ingredients_products`";
  $result = $mysqli->query($query);
  // $rows is my assoc array with all my stuff
  $rows = array();
  while($r = $result->fetch_assoc()) {
    $rows[] = $r;
  }
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