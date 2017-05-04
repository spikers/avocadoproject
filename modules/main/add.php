<form id="add-form" action="http://localhost:7888">
  Product: <input type="text" name="product" id="product"><br>
  Ingredient: <input type="text" name="ingredient" id="ingredient"><br>
  <button>Submit</button>
</form>
<script>
window.addEventListener('load', function () {
  var addForm = document.getElementById('add-form');
  addForm.addEventListener('submit', function (e) {
    e.preventDefault();
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