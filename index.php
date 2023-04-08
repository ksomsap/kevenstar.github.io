<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form By MKesak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="float-container">
        <!-- Float Column 2-->
        <div class="float-child-left">
          <div class="green"></div>
          <h1>Please Login to access all of the member data.</h1>
          <div class="data-scroll">
            <?php
              include("config.php");
              $query = $connect->query("SELECT * FROM member");
            ?>  
            <table>
                <tr>
                    <td>No</td>
                    <td>E-Mail</td>
                </tr>
                <?php
                $no = 1;
                while($row = $query->fetch_assoc()){
                    echo "<tr>
                        <td>$no</td>
                        <td>{$row['name']}</td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>   
          </div>
        </div>
        <!-- Float Column 2-->
        <div class="float-child-right">
            <div class="wrapper">
                <div class="title-text">
                    <div class="tittle login">Login Form</div>
                    <div class="tittle signup">Signup Form</div>
                </div>
                <div class="form-container">
                    <div class="slide-controls">
                        <input type="radio" name="slider" id="login" checked>
                        <input type="radio" name="slider" id="signup">
                        <label for="login" class="slide login">Login</label>
                        <label for="signup" class="slide signup">Signup</label>
                        <div class="slide-tab"></div>
                    </div>
                    <div class="form-inner">
                        <!-- Login Form -->
                        <form action="#" class="login">
                            <div class="field">
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="pass-link"><a href="#">Forgot password?</a></div>
                        <div class="field">
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">Not a member? <a href="#">Signup Now</a></div>
                        </form>
                        <!-- Signup Form -->
                        <form action="#" class="signup">
                            <div class="field">
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirm password">
                            </div>
                        <div class="field">
                            <input type="submit" value="Signup">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
      </div>
    <script>
        const loginForm = document.querySelector("form.login")
        const signupForm = document.querySelector("form.signup")
        const loginBtn = document.querySelector("label.login")
        const signupBtn = document.querySelector("label.signup")
        const signupLink = document.querySelector(".signup-link a")
        const loginText = document.querySelector(".title-text .login")
        const signupText = document.querySelector(".title-text .signup")
        signupBtn.onclick = (()=>{
            loginForm.style.marginLeft ="-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
            loginForm.style.marginLeft ="0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
        });
    </script>
</body>

</html>
