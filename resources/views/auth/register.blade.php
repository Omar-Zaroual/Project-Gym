<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background-color: #0e0e0e;
        }

        .card {
            border-radius: 1rem;
        }


        .card-img {
            height: 100%;
            object-fit: cover;
            border-radius: 1rem 0 0 1rem;
        }

        .form-container {
            height: 100%;
        }

        .form-container .card-body {
            padding: 4rem 2rem !important;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <section class="vh-100" style="background-color: #142d2a;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem; background-color: #0e0e0e;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="{{ asset('images\imglg.jpg') }}"
                                        alt="login form" class="card-img" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="form-container">
                                        <div class="card-body p-4 p-lg-5 text-black">
                                            <form>
                                                <div class="logo">
                                                    <img src="https://raw.githubusercontent.com/programmercloud/pgc-gym/main/img/logo.png" alt="" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="text" id="name" class="form-control form-control-lg" name="name"
                                                        :value="old('name')" required autocomplete="username" placeholder="Name" />
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="email" id="email" class="form-control form-control-lg" name="email"
                                                        :value="old('email')" required autocomplete="username" placeholder="Email address" />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="tele" id="Tele" class="form-control form-control-lg" name="Tele"
                                                        :value="old('Tele')" required autocomplete="username" placeholder="Telephone" />
                                                    <x-input-error :messages="$errors->get('Tele')" class="mt-2" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" id="password" class="form-control form-control-lg"
                                                        name="password" required autocomplete="new-password" placeholder="password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" id="password_confirmation" class="form-control form-control-lg"
                                                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>

                                                <x-primary-button class="btn btn-dark btn-lg btn-block">
                                                    S'inscrire
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
