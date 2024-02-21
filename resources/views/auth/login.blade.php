<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<form method="POST" action="{{ route('login') }}">
        @csrf
    <section class="vh-100" style="background-color: #142d2a;">
    <div class="container py-5 h-100 " >
        <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col col-xl-10" >
            <div class="card " style="border-radius: 1rem; background-color: #0e0e0e;" >
            <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ asset('images\imglg.jpg') }}"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form>

                    <div class="logo">
                        <img src="https://raw.githubusercontent.com/programmercloud/pgc-gym/main/img/logo.png" alt="" />
                    </div>

                    

                    <div class="form-outline mb-4">
                        <input type="email" id="email"  class="form-control form-control-lg" name="email" 
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Email address"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    

                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" 
                        name="password" required autocomplete="current-password" placeholder="password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    

                    <x-primary-button class="btn btn-dark btn-lg btn-block">
                        {{ __('Se connecter') }}
                    </x-primary-button>
                    
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</form>
</body>
</html>