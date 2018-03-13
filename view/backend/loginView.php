<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Administration - Connectez-vous</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <link rel="stylesheet" href="public/css/backend/style.css">

    </head>
        
    <body>
        <section>
            <div class="section"></div>
            <main>
                <center>
                    <div class="section"></div>

                    <h5 class="indigo-text">Connectez-vous à votre compte</h5>

                    <div class="section"></div>

                    <div class="container">
                        <div class="z-depth-1 grey lighten-4 row bloc">
                            <form class="col s12" action="index.php?action=controlLogin" method="post">
                                <div class='row'>
                                    <div class='col s12'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='email' name='email' id='email' />
                                        <label for='email'>Entrez votre email</label>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='password' name='pwd' id='password' />
                                        <label for='password'>Entrez votre mot de passe</label>
                                    </div>

                                    <label style='float: right;'>
                                        <p class="center"><a href="index.php?action=home" class="black-text"><i class="small material-icons black-text">home</i><br/><strong>Retour à la page d'accueil </strong></a></p>
                                    </label>
                                </div>

                                <br />
                                <center>
                                    <div class='row'>
                                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Valider</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </center>
                <div class="section"></div>
                <div class="section"></div>
            </main>
        </section>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        
    </body>
</html>