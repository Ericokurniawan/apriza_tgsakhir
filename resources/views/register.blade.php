<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 10 Custom Login and Registration - Register Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/styleRegister.css" rel="stylesheet">
    </head>
    <style>
        body{
            font-family: sans-serif;
            background: #d5f0f3;
            background-image: url(http://localhost/nusantara/img/home.jpg);
            background-size: cover;
        }
    </style>
    <body>
       

    <section class="vh-100">
        <div class="container py-5 h-100">
        <h1 class="card-title text-center">Sign Up</h1>
        @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
            <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                <!-- Name -->
                <div class="form-outline mb-4">
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                </div> 

                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                    <a href="#!">Forgot password?</a>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>

                    <div class="text-center pt-3 text-muted">Already have an account? <a href="/login">Sign In</a></div>
                </form>
            </div>
            </div>
        </div>
    </section>

</body>
</html>