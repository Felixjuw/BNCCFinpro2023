<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="./style.css">
    <!-- Boxicons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="register">
        <!-- Login modal -->
        <form method="post" action="{{route('register-user')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h1>Register</h1>
            <p>Please enter your details to register your account</p>
            <br>
            <div class="input-content">
                <!-- Username input -->
                <div>
                    <i class='bx bxs-user'></i>
                    <input type="text" placeholder="Username" name="username" value="{{old('username')}}" >
                    <span class="text-danger">@error('username'){{$message}}@enderror</span>
                        
                
                </div>
                <!-- Password input -->
                <div>
                    <i class='bx bxs-lock-alt' ></i>
                    <input type="password" placeholder="Password" name="password" value="{{old('password')}}"><!-- old doesnt work here -->
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                <!-- Reinput password -->
                <div>
                    <i class='bx bxs-lock-alt' ></i>
                    <input type="password" placeholder="Re-enter Password" name="repassword"  >
                    <span class="text-danger">@error('repassword'){{$message}}@enderror</span>
                </div>
                
            </div>
            <br>
            <br>
            <!-- Register button -->
            <button type="submit" name="register-btn" id="register-btn">Register</button>
            <!-- Ask for account -->
            <p>
                Already have account? 
                <a href="{{route('login-display')}}">Click here</a>
            </p>
            <br>
            <br>
        </form>
    </section>
</body>
</html>