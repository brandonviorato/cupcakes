<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Global CSS -->
    <link rel="stylesheet" href="styles.css">
    <title>Cupcakes</title>
</head>
<body>
<!-- Form -->
<div class="form-container">
    <?php
    if (empty($_POST)) {
        $form = '
            <form action="index.php" method="post">
                <p class="fs-3 form-title">Cupcake Fundraiser</p>
        
                <label for="name">Your name:</label>
                <input type="text" id="name" name="name">
        
                <label>Cupcake flavors:</label>
                <label for="grasshopper"><input type="checkbox" name="flavor[]" value="grasshopper"> The Grasshopper</label>
        
                <label for="whiskeyMapleBacon"><input type="checkbox" name="flavor[]" value="whiskeyMapleBacon"> Whiskey Maple Bacon</label>
        
                <label for="carrotWalnut"><input type="checkbox" name="flavor[]" value="carrotWalnut"> Carrot Walnut</label>
        
                <label for="saltedCaramelCupcake"><input type="checkbox" name="flavor[]" value="saltedCaramelCupcake"> Salted Caramel Cupcake</label>
        
                <label for="redVelvet"><input type="checkbox" name="flavor[]" value="redVelvet"> Red Velvet</label>
        
                <label for="lemonDrop"><input type="checkbox" name="flavor[]" value="lemonDrop"> Lemon Drop</label>
        
                <label for="tiramisu"><input type="checkbox" name="flavor[]" value="tiramisu"> Tiramisu</label>
        
                <input class="btn btn-primary" type="submit" value="Order">
            </form>
        ';
        echo $form;
    }
    else if (!empty($_POST)) {
        $name = $_POST['name'];
        echo '<p class="fs-3 form-title">Thank you, ' . $name . ' for your order!</p>';
        echo '<p>Order summary</p>';
        echo '<ul style="padding-left: 15px;">';
        $cost = 0;
        for ($i = 0; $i < count($_POST['flavor']); $i++) {
            echo '<li>' . $_POST['flavor'][$i] . '</li>';
            $cost += 3.5;
        }
        echo '</ul>';
        echo '<p>Order total: $' . $cost . '</p>';
    }
    ?>
</div>
<!-- Required JavaScript -->
<!-- Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
