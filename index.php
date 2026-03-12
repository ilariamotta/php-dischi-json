<?php


$json = file_get_contents("./discs.json");

$discs = json_decode($json, true);

// var_dump($discs);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Disc Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-center">My Collection</h1>
    <!-- GRID -->
    <div class="grid grid-cols-3 gap-6">

        <!-- ALBUM -->
         <?php foreach($discs as $disc){ ?>

    <div class="bg-gray-800 p-4 rounded-xl text-center text-white">
        <img src="<?php echo $disc["cover"]; ?>" class="w-full rounded-lg mb-3">
        <h2 class="text-lg font-bold">Titolo: <?php echo $disc["titolo"]; ?></h2>
        <p class="text-gray-400">Artista: <?php echo $disc["artista"]; ?></p>
        <p class="text-sm">Anno: <?php echo $disc["anno"]; ?></p>
        <p class="text-sm italic">Genere: <?php echo $disc["genere"]; ?></p>
    </div>

<?php } ?>
        </div>

    </div>

</div>

</body>
</html>