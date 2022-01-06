<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
</head>

<body>
    <?php foreach ($posts as $key => $post) : ?>
    <article>
        <?= $post ?>
        <a href="/">Go Back</a>
    </article>
    <?php endforeach ?>
</body>

</html>
