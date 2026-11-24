<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans">
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-black text-slate-800 mb-4"><i class="fa-solid fa-map-location-dot text-amber-500"></i> Интерактивті карта және геолокация</h1>
        <div class="bg-white p-6 rounded-3xl shadow-lg border border-slate-200">
            <p class="text-sm text-slate-600 mb-4">Жақын маңдағы жоғалған және табылған жануарлардың орналасқан жері:</p>
            <div class="w-full h-[500px] bg-slate-100 rounded-2xl overflow-hidden shadow-inner border border-slate-200 relative">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=71.3,51.1,71.5,51.2&amp;layer=mapnik" style="border: 0;"></iframe>
            </div>
        </div>
    </div>
</body>
</html>