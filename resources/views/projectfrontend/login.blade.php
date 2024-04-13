<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #0f8847;
            color: #fff;
        }

        .container {
            background-color: #222;
            padding: 40px; /* Increased padding for a more spacious feel */
            border-radius: 10px;
            margin-top: 50px;
            text-align: center;
            width: 400px; /* Increased width */
        }

        h2 {
            color: #1DB954;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Align text to the left */
        }

        .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #1DB954;
            width: 100%; /* Set width to 100% to fill the container */
        }

        .btn-primary {
            background-color: #1DB954;
            border-color: #1DB954;
        }

        .btn-primary:hover {
            background-color: #0f8847;
            border-color: #0f8847;
        }

        .link-primary {
            color: #1DB954;
        }

        .link-primary:hover {
            color: #0f8847;
            text-decoration: underline;
        }
    </style>
</head>

<body>
<h6 style="font-weight: bold;margin-left:40%; font-size:85px;margin-top:20px; " >Sign In</h6>
<form action="dataLogin" method="post" enctype="multipart/form-data">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-success">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <div class="container">
    
            <div class="form-group">
                <label for="inputEmail055">Email</label>
                <input type="email" class="form-control" id="inputEmail055" placeholder="Enter Email" name="loginemail" value="{{old('loginemail')}}">
                <span class="text-danger">@error('loginemail'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="inputPassword055">Password</label>
                <input type="password" class="form-control" id="inputPassword055" placeholder="Enter Password"
                    name="loginpassword" value="{{old('loginpassword')}}">
                    <span class="text-danger">@error('loginpassword'){{$message}}@enderror</span>
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="signin">LOGIN</button>
    
                <button type="button" class="btn btn-primary"><a href="{{url('registration')}}"class="link-primary"
                        style="color:white; text-decoration:none;">SIGN UP?</a></button>
            </div>
    
            </form>    
    </div>


</body>

</html>
