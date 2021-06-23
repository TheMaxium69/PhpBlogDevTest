<?php include "logique.php" ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>DevForum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php require_once "navbar.php" ?>


<h1>Voici les article du site</h1>
<?php foreach($resultRequetePosts as $value){ ?>

<div class="col-4">
    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo $value["id"]; ?> : <?php echo $value["title"]; ?></div>
        <div class="card-body">
            <p class="card-text"><?php echo $value["content"]; ?></p>
            <h6 class="card-text"> Ceer par :<?php echo $value["user_id"]; ?></h6>
            <p><?php echo $value["date"]; ?></p>
        </div>
        <form method="GET">
            <button class="btn btn-danger" type="submit" name="postId" value="<?php echo $value['id'] ?>">Aller à l'article</button>
        </form>
    </div>
</div>


<php? } ?>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


