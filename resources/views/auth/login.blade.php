
<!doctype html>
<!--BARRA DE PRINCIPAL VISIUS ADMIN-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./css/login.css">
<link rel="stylesheet" type="text/css" href="./css/menusuper.css">

<link rel="shortcut icon" href="./imgs/icon.ico">
<title>Visius Login</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="p-3 m-0 border-0 bd-example">
    <section class="h-100 gradient-form fondo" style="background-color: black;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">LOG IN</h4>
                                </div>
                                {{-- inicio form --}}
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('Email Address') }}</label>        
                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>                                              
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--
                                    <div class="row mb-3text-center pt-1 mb-4 pb-4">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="row mb-0">
                                        <div class="ctext-center pt-1 mb-5 pb-1">
                                            <button  type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                                                
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
{{-- bostrap --}}
                                </form>
                    {{-- fin form --}}


                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="px-3 py-4 p-md-5 mx-md-4">
                                <img src="./imgs/logo3.PNG" class="logo" style="width: 100%;"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>


