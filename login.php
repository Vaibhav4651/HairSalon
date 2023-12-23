<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./login.css">
    <script src="https://kit.fontawesome.com/4fad9a3f09.js" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <div class="login">
        <form action="authenticate.php" method="post" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
                <div class="login__box">
                    <input type="email" name="email" placeholder="Email ID" required class="login__input">
                    <i class="fa-regular fa-envelope"></i>
                </div>

                <div class="login__box">
                    <input type="password" name="password" placeholder="Password" required class="login__input">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-box">
                    <input type="checkbox" class="login__check-input" id="user-check">
                    <label for="user-check" class="login__check-label">Remember me</label>
                </div>

                <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>

            <div class="login__register">
                Don't have an account? <a href="Signup.php">Register</a>
            </div>
        </form>
    </div>

    <script>
        function validate() {
            var fname = document.form.fname.value;
            var email = document.form.email.value;
            var password =document.form.password.value;
    
            if (fname == null || fname == "") {
                alert("Write first name");
                return false;
            }
    
            if(email == null || email == ""){
                alert("Write email");
                return false;
            }
    
            if(password == null || password == ""){
                alert("Write password");
                return false;
            }
    
        }
    </script>

</body>

</html>