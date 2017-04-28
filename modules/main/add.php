<form>
  <textarea></textarea>
  <button type="button">Submit</button>
</form>
<script>
  var fd = new FormData();
  
  var xhr = new XMLHttpRequest();
  xhr.addEventListener('load', function (data) {
    console.log(data);
  });
  xhr.open('POST', 'http://localhost:7888/');
  xhr.send();
</script>