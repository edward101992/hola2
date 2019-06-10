<!doctype html>
<html lang="enph">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vista de Usuarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       
    </head>
   
    <body>
        <h1> <?= e($titulo)?> </h1>
        <ul>
            <?php foreach ($users as $usuarios):?>
                <li>
                    <?= e($usuarios->name) ?> EMAIL  : <?= e($usuarios->email) ?>;

              </li>
                <?php endforeach; ?>
                <?php>
                

        </ul>

    </body>
</html>
