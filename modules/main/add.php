<form action="http://localhost:7888/post.php">
  Ingredient: <input type="text" name="ingredient" id="ingredient"><br>
  Product: <input type="text" name="product" id="product"><br>
  <button id="submit-button" type="button">Submit</button>
</form>
<script>
window.addEventListener('load', function () {
  var submitButton = document.getElementById('submit-button');
  submitButton.addEventListener('click', function () {
    handleSubmit();
  });
});

function handleSubmit() {
  var data = new FormData();
  var ingredient = document.getElementById('ingredient').value;
  var product = document.getElementById('product').value;

  data.append("ingredient", ingredient);
  data.append("product", product);
  
  var xhr = new XMLHttpRequest();
  xhr.addEventListener('load', function (data) {
    console.log(data.target.response);
  });
  xhr.open('POST', 'http://localhost:7888/post.php');
  xhr.send(data);
}


</script>