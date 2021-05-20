
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom's Favourite Market</title>
    <link rel="shortcut icon" href="../Images/logo.png">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9cec6e31d9.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/cartStyle.css">
    <link rel="stylesheet" type="text/css" href="../CSS/cssforsignup.css">

</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href=""><img src="../Images/logo.png"><span id="title">Mom's Favourite
                    Market (ADMIN)</span></a></a>
            <!--LINK TO MAIN PAGE-->
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    
                </ul>
            </div>
        </nav>

    </header>



    <main>
        <div class="shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-left: 60px; margin-right:60px; margin-bottom: 30px; margin-top: 20px;">

            <h1 style="text-align:center; color: grey">Please Sign In Below</h1>
            <?php
                if(isset($_GET['Message'])){
                    ?>
                     <span style="color:red;font-size:21px;margin-left: 34em;"> <?php echo $_GET['Message'] ?> </span>   
                    <?php }?>
            <hr style="margin-bottom:4%">
            <div class="container">
                
                
                <form method = "post" action = "loginprocessadmin.php" >
                    <label>Admin Name</label>
                    <input type="text" name="name" placeholder="Please enter admin name" required/>
                </br>
            </br>
                    <label>Password:</label>
                    <input type="password" name="pass" placeholder="Password" required/>
                

                <button type="submit" role="submit" name="submit"
                    style="margin-left: 160px   ; margin-right: 60px;margin-top: 30px;color: white" >Log In</button>
                

                
                    <button type="button"  name="forgot-password"
                    style="margin-left: 128px   ; margin-right: 61px; margin-top: 30px;"><a href="backPage.php"
                    style="text-decoration: none; color: white;">ADMIN
                    Login In</a></button>
                
                        <button type="button" name="forgot-password"
                    style="margin-left: 123px   ; margin-right: 60px; margin-top: 30px;"><a href="passwordreset.php" style="text-decoration: none; color: white;"> Forgot Password</a></button>
                </form>
                <p>
                <h5>If you don't have an account, join the family <a href="signuppageHF.php"> here!</a></h5>
                </p>
            </div>

        </div>
    </main>




    <!--CDN import for header & footer-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
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
