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
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- TITLE -->
    <h1 class="text-4xl font-bold text-center mb-10">
        My Collection
    </h1>
    <!-- LAYOUT FORM + GRID -->
    <div class="flex gap-10">
        <!-- FORM -->
        <div class="w-1/3">
            <form action="server.php" method="POST" class="space-y-3 bg-gray-100 p-6 rounded-xl shadow">
                <!-- title -->
                <label class="block font-semibold">Titolo disco</label>
                <input type="text" name="titolo"class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                <!-- artist -->
                <label class="block font-semibold">Artista</label>
                <input type="text" name="artista"class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                <!-- year -->
                <label class="block font-semibold">Anno</label>
                <input type="number"name="anno" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                <!-- genre -->
                <label class="block font-semibold">Genere</label>
                <input type="text" Name="genere" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <!-- URL -->
                <label class="block font-semibold">URL immagine</label>
                <input type="text" name="immagine" class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                <!-- submit -->
                <button class="bg-blue-800 text-white rounded-md p-2 w-full mt-3 hover:bg-blue-900 transition"
                >Aggiungi</button>
            </form>
        </div>
<!-- GRID DISCS -->
        <div class="w-2/3">
            <div class="grid grid-cols-3 gap-6">
                <?php foreach($discs as $disc){ ?>
                    <div class="bg-gray-800 p-4 rounded-xl text-center text-white">
                        <img src="<?php echo $disc["cover"]; ?>" class="w-full rounded-lg mb-3">
                        <h2 class="text-lg font-bold">Titolo: <?php echo $disc["titolo"]; ?></h2>
                        <p class="text-gray-400">Artista: <?php echo $disc["artista"]; ?></p>
                        <p class="text-sm"> Anno: <?php echo $disc["anno"]; ?></p>
                        <p class="text-sm italic">Genere: <?php echo $disc["genere"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
</body>
</html>