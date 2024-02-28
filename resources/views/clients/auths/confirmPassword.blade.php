<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo9.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 09:49:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('porto_ecommerce/assets/images/icons/favicon.png')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('porto_ecommerce/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('porto_ecommerce/assets/css/demo9.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('porto_ecommerce/assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('porto_ecommerce/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
</head>
<body>
    <main class="main">
        <div class="container reset-password-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="feature-box border-top-primary">
                        <div class="feature-box-content">
                            @if(session('msg'))
                            <div class="alert alert-success">{{ session('msg') }}</div>
                        @endif
                    
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                            <form class="mb-0" action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <p>
                                    Lost your password? Please enter your
                                    email address. You will receive
                                    a link to create a new password via email.
                                </p>
                                <div class="form-group mb-0">
                                    <label for="reset-email" class="font-weight-normal">Email</label>
                                    <input type="email" class="form-control" id="reset-email" name="email"
                                         />
                                         @error('email')
                                             <div class="alert alert-danger mt-3">{{ $message }}</div>
                                         @enderror
                                </div>
    
                                <div class="form-footer mb-0">
                                    <a href="{{route('login')}}">Click here to login</a>
    
                                    <button type="submit"
                                        class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('porto_ecommerce/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/jquery.appear.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('porto_ecommerce/assets/js/main.min.js')}}"></script>  
</body>
</html>
