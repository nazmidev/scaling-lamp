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
<!-- navigation menu -->
<?php include "nav.php"; ?>
<!-- form -->
<form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Email</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" name="email" value="" placeholder="email address">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">City</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" name="city" value="" placeholder="city">
      </div>
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">State</label>
      <select name="state" id="inputState" class="form-control mb-2">
        <option selected>State</option>
        <option>Johor</option>
        <option>Kedah</option>
        <option>Kelantan</option>
        <option>Melaka</option>
        <option>Negeri Sembilan</option>
        <option>Pahang</option>
        <option>Penang</option>
        <option>Perak</option>
        <option>Perlis</option>
        <option>Sabah</option>
        <option>Sarawak</option>
        <option>Selangor</option>
        <option>Terengganu</option>
        <option>Wilayah Persekutuan</option>
      </select>
        </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2" name="type1" value="find matches" >Let's proceed</button>
    </div>
  </div>
</form>
</html>