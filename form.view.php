<!DOCTYPE html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="UTF-8">
        <title>Document </title>
        <link rel="stylesheet" href="/pico.min.css">
    </head>
    <body>
        <main class ="container">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($name) && !empty($favorite)): ?>
            <h2><?= $greeting ?> <?= $name; ?>.</h2>
            <h2>Your favorite food is <?= ucfirst($favorite); ?>.</h2>

<?php endif; ?>
        <form method="post" >
        <label>Name: </label>
        <input type="text" name="name" value="<?= htmlspecialchars($name); ?>">
        
        
        <input type = "radio" name="favorite" id = "pizza" value="pizza" <?=isset($pizza)?'checked':'';?>>
        <label for="pizza">Pizza</label>

        <input type = "radio" name="favorite" id = "pasta" value="pasta" <?=isset($pasta)?'checked':'';?>>
        <label for ="pasta">Pasta</label>

        <input type = "radio" name="favorite" id = "burger" value="burger" <?=isset($burger)?'checked':'';?>>
        <label for ="burger">Burger</label>
        
        <input type="submit">

</form>


        </main>      
    </body>
</html>