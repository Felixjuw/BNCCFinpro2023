<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./style.css">
    <!-- Boxicons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="login">
        <!-- Login modal -->
        <form method="post" action="{{route('login-user')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h1>Login</h1>
            <p>Please enter your details to login to your account</p>
            <br>
            <div class="input-content">
                <!-- Username input -->
                <div>
                    <i class='bx bxs-user'></i>
                    <input type="text" placeholder="Username" name="username" value="{{old('username')}} ">
                    <span class="text-danger">@error('username'){{$message}}@enderror</span>

                </div>
                <!-- Password input -->
                <div>
                    <i class='bx bxs-lock-alt' ></i>
                    <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                    <i class='bx bx-hide' id="show-password"></i>
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>

                </div>
            </div>
            <!-- Keep login box -->
            <div class="keep-me-login-box">
                <input type="checkbox" name="keep-me-logged-in">
                <span>Remember me for 30 days</span>
            </div>
            <br>
            <br>
            <!-- Login button -->
            <button type="submit" name="login-btn" id="login-btn">Login</button>
            <!-- Ask for account -->
            <p>
                Don't have account? 
                <a href="{{route('register-display')}}">Click here</a>
            </p>
            <br>
            <br>
        </form>
    </section>

    <script type="text/javascript">
        const showPassword = document.querySelector("#show-password");
        const passwordInputBox = document.getElementsByName("password")[0];

        showPassword.addEventListener("click", () => {
            // Update show password icons
            if (showPassword.classList.contains("bx-show")) {
                showPassword.classList.remove("bx-show");
                showPassword.classList.add("bx-hide");
            }
            else {
                showPassword.classList.remove("bx-hide");
                showPassword.classList.add("bx-show");
            }

            // Update password input box attribute
            passwordInputBox.setAttribute("type", passwordInputBox.getAttribute("type") === "password" ? "text" : "password");
        });
    </script>
</body>
</html>