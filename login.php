<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logofitness.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/log.css">
    <title>Fitness</title>
</head>
<body>
<div class="banner">
    <video src="assets/img/bg.mp4" autoplay muted loop type="mp4"></video>
</div>
 <div class="wrapper">
    <nav class="nav">
        <a href="#" class="nav--logo">
            <img src="assets/img/logofitness.png" alt="logo">
        </a>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link">Home</a></li>
                <li><a href="#" class="link">Services</a></li>
                <li><a href="#" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <hr>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!------------------- registration form -------------------------->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <!-- <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div> -->
        <div class="register-container" id="register">
            <div class="wrapper2">
                <div class="top">
                    <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                </div>
                <hr>
                <div class="header2">
                    <ul>
                        <li class="active form_1_progessbar">
                            <div>
                                <p>1</p>
                            </div>
                        </li>
                        <li class="form_2_progessbar">
                            <div>
                                <p>2</p>
                            </div>
                        </li>
                        <li class="form_3_progessbar">
                            <div>
                                <p>3</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form_wrap">
                    <div class="form_1 data_info">
                        <header>Signup Info</header>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="Email Address" class="input" id="email">
                                </div>
                                <div class="input_wrap">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="input" id="password">
                                </div>
                                <div class="input_wrap">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" name="confirm password" class="input" id="confirm_password">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form_2 data_info" style="display: none;">
                        <header>Personal Info</header>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <label for="user_name">Username</label>
                                    <input type="text" name="User Name" class="input" id="user_name">
                                </div>
                                <div class="input_wrap">
                                    <label for="first_name">Age</label>
                                    <input type="text" name="Age" class="input" id="Age">
                                </div>
                                <div class="input_wrap">
                                    <label for="last_name">Gender</label>
                                    <input type="text" name="Gender" class="input" id="Gender">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form_3 data_info" style="display: none;">
                        <header>Presonal Info</header>
                        <form>
                            <div class="form_container">
                                <div class="input_wrap">
                                    <label for="company">Weight(kg)</label>
                                    <input type="text" name="Current Company" class="input" id="company">
                                </div>
                                <div class="input_wrap">
                                    <label for="experience">Height(cm)</label>
                                    <input type="text" name="Total Experience" class="input" id="experience">
                                </div>
                                <div class="input_wrap">
                                    <label for="designation">Disabilities(optional)</label>
                                    <input type="text" name="Designation" class="input" id="designation">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_done">Done</button>
                    </div>
                </div>
            </div>
            
            <div class="modal_wrapper">
                <div class="shadow"></div>
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                    <p>You have successfully completed the process.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>   


<script src="assets/js/log.js" defer></script>
</body>

</html>