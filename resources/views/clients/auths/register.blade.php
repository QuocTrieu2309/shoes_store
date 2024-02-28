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
    <style>
        .password-input {
            position: relative;
        }
    
        .toggle-password,.toggle-password_confirmation {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>   
    <main class="main">   
        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading mb-1">
                                <h2 class="title text-center">Register</h2>
                            </div>
                 
                            <form action="{{route('check-register')}}" method="POST">
                                @csrf
                                <label for="register-name">
                                    Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide" name="name" id="register-name" value="{{old('name')}}" />
                                @error('name')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                                <label for="register-email">
                                    Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" class="form-input form-wide" name="email" id="register-email" value="{{old('email')}}" />
                                @error('email')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                                <label for="register-phone">
                                    Phone number
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide" name="phone" id="register-phone" value="{{old('phone')}}" />
                                @error('phone')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                                <label for="register-address">
                                    Address
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide" name="address" id="register-address" value="{{old('address')}}" />
                                @error('address')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
    
                                <label for="register-password">
                                    Password
                                    <span class="required">*</span>
                                </label>
                                <div class="password-input position-relative">
                                    <input type="password" class="form-input form-wide pr-5" name="password" id="register-password" value="{{old('password')}}" />
                                    @error('password')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                                    <i class="fas fa-eye-slash toggle-password position-absolute" id="toggle-password"></i>
                                </div>
                                <label for="register-password_confirmation">
                                    Password Comfirmation
                                    <span class="required">*</span>
                                </label>
                                <div class="password-input position-relative">
                                    <input type="password" class="form-input form-wide pr-5" name="password_confirmation" id="register-password_confirmation" value="{{old('password_confirmation')}}" />
                                    @error('password_confirmation')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                    @enderror
                                    <i class="fas fa-eye-slash toggle-password_confirmation position-absolute" id="toggle-password_confirmation"></i>
                                </div>
    
                                <div class="form-footer mb-2">
                                    <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const togglePassword = document.getElementById('toggle-password');
        const togglePasswordConfirm = document.getElementById('toggle-password_confirmation');
        const passwordInput = document.getElementById('register-password');
        const passwordConfirmInput = document.getElementById('register-password_confirmation');
    
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.classList.toggle('fa-eye-slash');
            togglePassword.classList.toggle('fa-eye');
        });
        togglePasswordConfirm.addEventListener('click', function() {
            const type =  passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmInput.setAttribute('type', type);
            togglePasswordConfirm.classList.toggle('fa-eye-slash');
            togglePasswordConfirm.classList.toggle('fa-eye');
        });
    </script>
    <script src="{{asset('porto_ecommerce/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('porto_ecommerce/assets/js/jquery.appear.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('porto_ecommerce/assets/js/main.min.js')}}"></script>
</body>

</body>
</html>