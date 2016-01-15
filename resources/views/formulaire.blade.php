@extends('layout.formulaire')

@section('head')
<head>
    <meta charset="UTF-8">
    <script src="{{('/laravel/public/js/bootstrap.min.js')}}"></script>
    <script src="{{('/laravel/public/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{('/laravel/public/js/moment-with-locales.js')}}"></script>
    <script src="{{('/laravel/public/js/boostrap-datetimepicker.js')}}"></script>
    <link href="{{('/laravel/public/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/jquery.datetimepicker.css')}}" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Formulaire</title>
</head>

@endsection

@section('start')


<div class="container">
<div class="row">
<div class="col-lg-12">
    <div class="contact_container">
        <div class="row">
            <div  align="center">
                <h2>Formulaire d'inscription</h2>
                <p>Veuillez remplir le formulaire pour pouvoir vous inscrire dans ce club</p>
            </div>
        </div> 
    </div>

@endsection

@section('body')
{!!  Form::open(array('action'=>'alexController@postInfos', 'method' => 'post', 'onsubmit' => "return verif_send()", 'id' => 'myForm')) !!}
{!! csrf_field() !!}
<div class="form-horizontal"  role="form" >
    <div class='row'>
        <div class="col-lg-6">
        </br>
            <div class="form-group">
                <label class="col-md-2 col-xs-12 control-label">Civilté</label>
                    <div class="checkoption" id="civilite">
                        <input type="radio" name="civilite" id ="monsieur" value="monsieur"> Monsieur
                        <input type="radio" name="civilite" id="madame" value="madame"> Madame
                    </div>
                </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Nom</label>
                <div class="col-md-6" id="nom">
                    <input type="text" class="form-control" name="nom" id="name" placeholder="Nom">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-2 control-label">Prenom</label>
                <div class="col-md-6" id="prenom">
                    <input type="text" class="form-control" name="prenom" id="prename" placeholder="Prénom">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-6" id="email">
                    <input type="email" class="form-control" onChange="verifiermail()" name="mail" id="mail" placeholder="email@adresse.com">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Téléphone</label>
                <div class="col-md-6" id="tel">
                    <input type="text" class="form-control" name="telephone" id="fix" placeholder="XX XX XX XX XX">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Mobile</label>
                <div class="col-md-6" id="mobile">
                    <input type="text" class="form-control" name="mobile" id="perso" placeholder="XX XX XX XX XX">
                </div>
            </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Date de naissance</label>
            <div class="col-md-6" id="datenaiss">
                <div class='input-group date' id='datetimepicker1'>
                    <input type="text" class="form-control" name="datenaiss" id="datnaiss" placeholder="JJ/MM/YYYY"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        </div>
    <div class="col-lg-6"></br>
        <div class="form-group">
            <label class="col-md-2 control-label">Sport</label>
            <div class="col-md-6" id="sports">
                <select class="sport form-control" name="sport" id="sport">
                    <option value="0"></option>
                    <option value="Football">Football</option>
                    <option value="Handball">Handball</option>
                    <option value="Rugby">Rugby</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Tennis">Tennis</option>
                </select>
            </div>
        </div>
        <div class="form-group" id ="classement" style="display:none">
            <label class="col-md-2 control-label">Classement</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="classement" name="classement" placeholder="Classement">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Catégorie</label>
            <div class="col-md-6" id="categories">
                <select class="form-control" name="categorie" id="categorie">
                    <option></option>
                    <option>Junior</option>
                    <option>U-11</option>
                    <option>U-13</option>
                    <option>U-15</option>
                    <option>U-17</option>
                    <option>U-20</option>
                    <option>Senior</option>
                    <option>Loisir</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Adresse</label>
            <div class="col-md-6" id="adresse">
                <input type="text" class="form-control" name="adresse" id="addr" placeholder="Addresse">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Code Postal</label>
            <div class="col-md-6" id="cp">
                <input type="text" class="form-control" name="cp" id="codpost" placeholder="CP">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Ville</label>
            <div class="col-md-6" id="ville">
                <input type="text" name="ville" class="form-control" id="town" placeholder="Ville">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nationalité</label>
            <div class="col-md-6" id="nationalite">
                <input type="text" class="form-control" name="nationalite" id="nat" placeholder="Pays">
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="col-lg-6">
            <button  class="btn btn-success">
                <span name="submit" id="submit" class="glyphicon glyphicon-floppy-disk"></span> Enregistrer le formulaire
                <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
            <button name="reset" id="cancel" type="reset" onclick="annule()" value="reset" class="btn btn-danger">
                Annuler <span class="glyphicon glyphicon-remove"></span>
            </button>
        </div>
    </div>
</div>

</div>
{!! Form::close() !!}

@endsection

@section('script')
<script type="text/javascript">
    $(function () {

        $('#datetimepicker1').datetimepicker({
            locale: 'fr',
            format: 'DD/MM/YYYY'
        });
       $(".sport").change(function(){
            if($('.sport').val() == 'Tennis'){
                document.getElementById('classement').style.display="block";
            }
            else{
                document.getElementById('classement').style.display="none";
            }
       });
    });

    function verifiermail() {
      if ((document.getElementById('mail').value.indexOf("@")>=0)&&(document.getElementById('mail').value.indexOf(".")>=0)) {
            document.getElementById('email').className = "col-md-6 has-success";
            return true ;
      } else {
            document.getElementById('email').className = "col-md-6 has-error";
            alert("Mail invalide !");
            return false;
      }
   }
   function valider_numero(data) {
        console.log('je sus dans la fonction valid num');
        var nombre = document.getElementById(data).value;
        var chiffres = new String(nombre);

        // Enlever tous les charactères sauf les chiffres
        chiffres = chiffres.replace(/[^0-9]/g, '');

        // Le champs est vide
        if ( nombre == "" ){return false;}

        // Nombre de chiffres
        compteur = chiffres.length;
        console.log(compteur);
        if (compteur!=10){return false;}
    }
   function verif_send(){
        valid = true;
        tab = {'nom':'name','prenom':'prename','email':'mail','tel':'fix','mobile':'perso','datenaiss':'datnaiss','sports':'sport','categories':'categorie','adresse':'addr','cp':'codpost','ville':'town','nationalite':'nat'};
        if(document.getElementById('madame').checked == false && document.getElementById('monsieur').checked == false){
            document.getElementById('civilite').style.color = "red";
        }
        else{document.getElementById('civilite').style.color = "green";}
        for(i in tab){
            if(tab[i] == 'mail'){
                if(verifiermail() == false){valid = false;}
            }
            else if(tab[i] == 'fix' || tab[i] == 'perso'){
                if(valider_numero(tab[i]) == false){
                    valid=false;
                    document.getElementById(i).className = "col-md-6 has-error";
                }
                else{document.getElementById(i).className = "col-md-6 has-success";}
            }
            else if(tab[i] == 'codpost'){
                if(isNaN(document.getElementById(tab[i]).value) == true){
                    valid=false;
                    document.getElementById(i).className = "col-md-6 has-error";
                }
                else{document.getElementById(i).className = "col-md-6 has-success";}
            }
            else{
                if (document.getElementById(tab[i]).value == undefined || document.getElementById(tab[i]).value == '' || document.getElementById(tab[i]).value == 0) {
                    document.getElementById(i).className = "col-md-6 has-error";
                    valid = false;
                }
                else{document.getElementById(i).className = "col-md-6 has-success";}
            }
        }
        return valid;
   }
   function annule(){
        tab = ['nom','prenom','email','tel','mobile','datenaiss','sports','categories','adresse','cp','ville','nationalite'];
        for(i in tab){document.getElementById(tab[i]).className = "col-md-6 ";}
        document.getElementById('civilite').style.color = '';
   }
</script>
@endsection