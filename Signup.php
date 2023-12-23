<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/Signup.css">
    <script src="https://kit.fontawesome.com/4fad9a3f09.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
    <div class="login">
        <form action="register.php" method="post" class="login__form" >
            <h1 class="login__title">Sign Up</h1>

            <div class="login__inputs">
                <div class="login__box">
                    <input  placeholder=" Full Name" class="login__input" id="name"  type="text" name="name" required>
                    <i class="fa-regular fa-user"></i>
                </div>

                <div class="login__box">
                    <input type="email" name="email" placeholder="Email ID" class="login__input" id="email">
                    <i class="fa-regular fa-envelope"></i>
                </div>


                <div class="login__box">
                    <input type="password" name="password" placeholder="Password" class="login__input" id="password">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <button type="submit" class="login__button" id="sumbit" value="submit">Sign Up</button>
            <button type="reset" class="login__button" value="reset">Reset</button>

            <div class="login__register">
                Already have an account?<a href="login.php">Sign In</a>
            </div>
        </form>
    </div>
</body>

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

</html>