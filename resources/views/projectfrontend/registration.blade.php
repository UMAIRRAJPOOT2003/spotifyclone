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
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        h2 {
            color: #1DB954;
        }

        .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #1DB954;
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
        }
    </style>
</head>

<body>
    <h6 style="font-weight: bold;margin-left:40%; font-size:85px;margin-top:20px; " >Sign Up</h6>

    <form action="dataInsert" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container">
       
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail054">Email</label>
                    <input type="email" class="form-control" id="inputEmail054" placeholder="Email" name="inputemail" value="{{old('inputemail')}}">
                    <span class="text-danger">@error('inputemail'){{$message}}@enderror</span>
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword054">Password</label>
                    <input type="password" class="form-control" id="inputPassword054" placeholder="Password"
                        name="inputpassword" value="{{old('inputpassword')}}">
                        <span class="text-danger">@error('inputpassword'){{$message}}@enderror</span>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputAge054">Age</label>
                    <input type="text" class="form-control" id="inputAge054" placeholder="Age" name="inputage" value="{{old('inputage')}}">
                    <span class="text-danger">@error('inputage'){{$message}}@enderror</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress054">Address</label>
                <input type="text" class="form-control" id="inputAddress054" placeholder="Address" name="inputaddress" value="{{old('inputaddress')}}">
                <span class="text-danger">@error('inputaddress'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="inputName054">City</label>
                <input type="text" class="form-control" id="inputName054" name="inputname" value="{{old('inputname')}}">
                <span class="text-danger">@error('inputname'){{$message}}@enderror</span>
            </div>
           
            <button type="submit" class="btn btn-primary" name="signin">SIGN UP</button>
            <br>
            <a href="{{url('login')}}" class="link-primary">Already have an account? Log in</a>
        </form>
    </div>
</body>

</html>
