<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Swap Deals Website">
    <meta name="keywords" content="HTML, CSS, XML, Javascript, PHP">
    <meta name="author" content="Nazmi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../swaptized/images" target="_blank">
    <title>Welcome to swaptized.com</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
<?php include "nav.php"; ?>
   <!-- heading -->
   <div class="center">
        <h1>SWAPTIZED.COM</h1>
     </div>
     
     <!-- form -->
  <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" name="ineed" value="" placeholder="I want to buy...">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" name="ioffer" value="" placeholder="I want to sell...">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2" name="type1" value="find matches" >Search deals</button>
    </div>
  </div>
</form>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>