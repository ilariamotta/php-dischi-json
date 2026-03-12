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
    <!-- TITLE -->
    <h1 class="text-4xl font-bold text-center mb-8">My Collection</h1>
<!-- FORM -->
 <form action="server.php" method="POST">
    <!-- title -->
    <label>Titolo disco</label>
<input type="text" name="titolo" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
<!-- artist -->
<label>Artista</label>
<input type="text" name="artista" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
<!-- year -->
<label>Anno</label>
<input type="number" name="anno" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
<!-- genre -->
<label>Genere</label>
<input type="text" name="genere" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">


 </form>

    <!-- GRID -->
    <div class="grid grid-cols-6 gap-6">

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