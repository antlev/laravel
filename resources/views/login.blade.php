

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

<div class="container">
    <div class="row">
        <div class="col-md-12">
                       <div class="wrap">
                <p class="form-title">
                    Ligue des Lorraines</p>
<br>
<br>
<br>
       <!--         <form class="login" action=# id="formsub"> -->
<form method="POST" action="/auth/login" id="formsub">
    {!! csrf_field() !!}
                <input type="text" id="submit_mail" placeholder="Email" value="{{ old('email') }}"/>
                <input type="password" id="submit_pw" placeholder="Mot de passe" />
                <input type="submit" value="Connexion" id="submit" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Se rappeler
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Mot de passe oubli&eacute</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ URL::asset('js/login.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 


