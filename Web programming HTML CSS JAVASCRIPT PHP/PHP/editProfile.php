<?php
//$email=$_GET['email'];
$email=$_POST['original_email'];
$file="../data/userData.txt";
$handle=fopen($file, 'a+');
$contents=file_get_contents($file);
$words=explode("\n", $contents);
$len= count($words);
$string="Email: ".$email;

for($i=0; $i<$len; $i++){
  
  if(strcmp($words[$i], $string)==0){
    // print_r("yes");
    $words[$i]="Email: " .$_POST['new_email'];

    if(!empty($_POST['new_password'])){
      $words[$i+1]="Password: ".$_POST['new_password'];
    }

    if(isset($_POST['new_province'])){
      $words[$i+2]="Province: ".$_POST['new_province'];
    }

    if(!empty($_POST['new_city'])){
      $words[$i+3]="City: ".$_POST['new_city'];
    }
    if(!empty($_POST['new_phone'])){
      $words[$i+4]="Phone: ".$_POST['new_phone'];
    }
    if(!empty($_POST['address'])){
      $words[$i+5]="Address: ".$_POST['address'];
    }
    
  }

}
$new_text=implode("\n", $words);
file_put_contents($file, $new_text);
fclose($handle);
?>



<html>
<!--NAME: DIVLEEN KAUR AHLUWALIA, STUDENT ID: 40116121-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/edit2.css">
  <title>Mom's Favourite Market</title>
  <link rel="shortcut icon" href="../Images/logo.png">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="../CSS/main.css">
</head>



<body>
  <!--HEADER-->

  <header>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="successadmin.php"><img src="../Images/logo.png"><span id="title">Mom's Favourite
          Market (ADMIN)</span></a></a>
      <!--LINK TO MAIN PAGE-->
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="ProductList.php" class="nav-link">Product List</a>
          </li>

          <li class="nav-item">
            <a href="backstoreUserAccounts.php" class="nav-link">User List</a>
          </li>

          <li class="nav-item">
            <a href="orderLists.php" class="nav-link">Order List</a>
          </li>

          <li class="nav-item">
            <a href="loginpage2.php" class="nav-link"><i class="far fa-user-circle fa-lg"></i> Sign in</a>
          </li>

        </ul>
      </div>
    </nav>

  </header>


  <!--MAIN BODY CONTENT-->
  <!-- <form action="editProfile.php" method="post"> -->
  <form>
  <div class="container">

    <div class="row">
      <div class="col-md-5">
        <img src="../Images/user.png" class="img-fluid">
      </div>

      <div class="col-md-7">
        <h1 style="margin-left:30px; color: grey">Edit Profile</h1>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-left: 30px; margin-right:60px;">
          <div class="form-group row">
            <label for="inputEmail4">Change Email</label>
            <div class="form-group col-5">
              <input type="email" class="form-control" id="inputEmail4" placeholder="Current Email" name="original_email">
              <span id="mismatch" style="display:none;color:#e04362;font-style: italic;">The current email is invalid!</span>
            </div>
            <div class="form-group col-5">
              <input type="email" class="form-control" id="inputEmail" placeholder="New Email" name="new_email">
              <span id="mismatch2" style="display:none;color:#e04362;font-style: italic;">The new email is invalid!</span>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword4">Change Password</label>
            <div class="form-group col-5">
              <input type="password" class="form-control" id="inputPassword4" placeholder="New Password">
            </div>
            <div class="form- group col-5">
              <input type="password" class="form-control" id="inputPassword" placeholder="Confirm New Password" name="new_password">
              <span id="mismatch_password" style="display:none;color:#e04362;font-style: italic;">The passwords provided do not match!</span>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputAddress">Add Address</label>
            <div class="form-group col-10">
              <input type="text" class="form-control" id="inputAddress" name="address">
            </div>
          </div>


          <div class="form-group row">
            <div class="form-group col-5">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity" name="new_city">
            </div>

            <div class="form-group col-5">
              <label for="province">Province</label>
              <select class="form-control" id="province" name="new_province">
                <option>Alberta</option>
                <option>British Columbia</option>
                <option>Ontario</option>
                <option>Quebec</option>
                <option>New Brunswick</option>
                <option>Nova Scotia</option>
              </select>
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-5">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="new_phone">
              <span id="mismatch_phone" style="display:none;color:#e04362;font-style: italic;">Invalid phone number!</span>
            </div>
          </div>
          <br>

          <div class="form-row justify-content-center">
            <button class="btn btn-outline-secondary" id="save" onclick="submission()">Save Changes</button>
          </div>
          <br>
          <div class="form-row justify-content-center">
            <p>View <a href="backstoreUserAccounts.php">List of Users</a></p>
          </div>



        </div>
      </div>
    </div>


  </div>
  </div>
</form>

  <script src="../JS/editProfile.js"></script>

  <!--CDN import for header & footer-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>


</html>