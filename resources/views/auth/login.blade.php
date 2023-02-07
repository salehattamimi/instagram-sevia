<html>

<head>
    <meta charset="UTF-8">
    <title>Instagram Login Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="wrapper">
        <div class="header">

            <div class="top">
                <div class="logo">
                    <p>Instagram</p>
                    <!-- <img src="instagram.png" alt="instagram" style="width: 175px;"> -->
                </div>
                <div class="form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input_field">
                            <input id="username" type="text" class="input @error('username') is-invalid @enderror"
                                name="username" placeholder="username" value="{{ old('username') }}" required
                                autocomplete="username" autofocus>


                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input_field">
                            <input type="password" placeholder="Password" input id="password"
                                class="input form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="forgot">
                            {{-- <a href="#">Forgot password?</a> --}}
                        </div>

                        <button class="button" type="submit"><a href="#">Log In</a></button>
                    </form>
                </div>

            </div>
            <div class="signup">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
            </div>


        </div>
    </div>


</body>

</html>
