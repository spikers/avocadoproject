<form action="http://localhost:7888/post.php">
  <textarea></textarea>
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
  var ingredient = "Avocado";
  var product = "Guacamole";

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