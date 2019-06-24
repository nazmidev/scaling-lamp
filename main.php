<?php
    $align_logo = '1';
?>

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
<div class="container">
    <form action="" method="POST">
    <div class="form-row align-items-center">
        <div class="col-auto">
        <label class="sr-only" for="inlineFormInput">Name</label>
        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
        </div>
        <div class="col-auto">
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
            </div>
            <select name="state" id="inputState" class="form-control">
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
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" id="autoSizingCheck" value="1" >
            <label class="form-check-label" for="autoSizingCheck">
            Ignore Location
            </label>
        </div>
        </div>
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2" value="update result">Update Results</button>
        </div>
    </div>
    </form>
</div>
<!-- jumbotron 100% -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">100% matches</h1>
  </div>
</div>
<!-- 3 rows cards -->
<div class="container">
    <div class="row full-width">
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- jumbotron 50% -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">50% matches</h1>
  </div>
</div>
<!-- 3 rows cards -->
<div class="container">
    <div class="row full-width">
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    </div>
</div>
</html>