<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Subcription Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <style>
        body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

    </style>
</head>
<body>
        
<div class="container mt-5" style="max-width: 750px">
    
    <h1>Subcription Form</h1>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success  alert-dismissible">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    
    @if ($message = Session::get('error'))
        <div class="alert alert-danger  alert-dismissible">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    
    <form method="post" action="{{ route('send.php.mailer.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="plan" class="form-label">Select Plan:</label>
            <select class="form-select" id="plan" name="plan" required>
                <option value="" disabled selected>Select Plan</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Select Package:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio"  name="package" id="basic" value="basic" required>
                <label class="form-check-label" for="basic">Basic</label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="radio" name="package" id="exclusive" value="exclusive" required>
                <label class="form-check-label" for="exclusive">Exclusive</label>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="radio" name="package" id="premium" value="premium" required>
                <label class="form-check-label" for="premium">Premium</label>
            </div>
        </div>        
        <button type="submit" class="btn btn-primary" style="font-size: 20px;"  name="pay" id="payButton">Pay</button>
    </form>
</div>
</body>
</html>