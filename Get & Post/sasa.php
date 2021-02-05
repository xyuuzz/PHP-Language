<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get & Post</title>
    </head>
    <body>
        <h1>Profil Buah Buahan</h1>

        <ul>

        <?php foreach($ciriBuah as $k) { ?>     <!-- untuk melooping -->

            <li>
                <a href="php7.2.php?buah=<?= $k["nama"]?>"> <?= $k["nama"]?> </a>
            </li>

        <?php } ?>
        
        </ul>
        

    </body>
</html>