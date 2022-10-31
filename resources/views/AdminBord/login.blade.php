<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Espace Admin</title>
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            @if ($message = Session::get('warning'))
                <div class="alert alert-danger mt-1 alert-dismissible" role="alert">
                    <div class="alert-body d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-info me-50">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span>{{$message}}</span>
                    </div>
                </div>
            @endif
            <header>Veuillez vous connectez</header>
            <form action="{{ route('login.auth') }} " method="post">
            @csrf
                <div class="field input">
                    <label for="">Adresse email</label>
                    <input type="text" name="email" placeholder="Entrer votre adresse email" required>
                </div>
                <div class="field input">
                    <label for="">Mot de passe</label>
                    <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Connexion">
                </div>
                <div class="link">Mot de passe oublier?
                    <a href="#">renitialiser</a>
                </div>
            </form>
        </section>
    </div>
</body>

</html>

</html>