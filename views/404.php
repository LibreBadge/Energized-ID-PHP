<?php include("head.php"); ?>
<link rel="stylesheet" type="text/css" href="resources/errorCSS/error.css">

<div class="jumbotron mx-auto">
  <h1 class="display-4 mx-auto">404</h1>
  <h1 class="display-4">Hello, looks like you got lost!</h1>
  <hr class="my-4">
  <div class="row">
      <div class="col-md-auto">
        <button class="btn btn-primary btn-lg" onclick="goBack()">Go Back</button>
</div>
        <div class="col-md-auto">
        <a href="home" class="btn btn-primary btn-lg">Go Home</a>

    </div>

<script>
function goBack() {
  window.history.back();
}
</script>