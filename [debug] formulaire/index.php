<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/style.css" rel="stylesheet">
        <style>

        </style>
    </head>

    <body>


        <div class="container">


            <h1>Me contacter </h1>

            <?php
            if(
                !empty($_POST['mail'])
                !empty($_POST['nme']) &&
                !empty($_POST['message'])
            ){
                mail('grafikart@yopmail.com', 'Formulaire de contact', $_POST['message'], $headers)
            }elseif(!empty($_POST)){
                echo '<div class="alert alert-danger">Vous n\'avez pas rempli tous les champs</div>';
            }
            ?>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, fugiat, in iure veritatis accusamus eligendi vero ea blanditiis illum id. Libero, eveniet explicabo nihil maiores nisi ratione commodi vel natus?</p>

            <form role="form" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="mail">Adresse email</label>
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="nom@domain.com" value="<?php echo $_POST['mail']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Votre nom</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?php echo $_POST['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" class="form-control" rows="3"><?php echo $_POST['message']; ?></textarea>
                    </div>

                    <input type="submit" value="Envoyer" class="btn btn-primary">
                </fieldset>
            </form>


        </div><!-- /.container -->

    </body>
</html>