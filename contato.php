<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Esse meta é importante para que a responsividade funcione-->
    <!--define que deve ser usada 100% da largura de viewport do dispositivo-->
    <title>Santos Acessivel - Contato</title>
    <!--CSS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" media="screen, print">
    <link rel="stylesheet" href="css/estilo.css" media="screen, print">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="https://use.fontawesome.com/6a6867f07c.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <!--se tiver alguma duvida só perguntar Mo-->
</head>
    <body>
        <?php include("header.php") ?>
        <main>
            <form class="container contact-form" id="contact-form" action="#" method="post">
                <div class="row">
                    <div class="input-field col l6 m6 s12">
                      <input id="name" type="text" class="validate name">
                      <label for="name"> Nome </label>
                    </div>
                    <div class="input-field col l6 m6 s12">
                      <input id="lastName" type="text" class="validate lastName">
                      <label for="lastName"> Sobrenome </label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col l6 m6 s12">
                      <input id="email" type="email" class="validate email">
                      <label for="email"> Email </label>
                    </div>
                    <div class="input-field col l6 m6 s12">
                      <input id="phone" type="number" class="validate phone">
                      <label for="phone"> Telefone </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="menssage" class="materialize-textarea menssage"></textarea>
                        <label for="menssage">Mensagem</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col l12 m12 s12">
                        <a class="btn waves-effect waves-light left">
                            <i class="material-icons left">arrow_back</i>
                            Voltar
                        </a>
                        
                        <button class="btn waves-effect waves-light right bt-contato" type="submit" name="action">
                            Enviar
                            <i class="material-icons right send-icon">drafts</i>
                        </button>
                    </div>
                </div>
            </form>
        </main>
        <?php include("footer.php") ?>
    </body>