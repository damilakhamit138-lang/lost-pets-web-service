<?php 
include 'db.php'; 

// URL-ден келген ID-ді алу (егер жоқ болса 1 болады)
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Дерекқордан сол ID бар жануарды іздеу
$stmt = $pdo->prepare("SELECT * FROM pets WHERE id = ?");
$stmt->execute([$id]);
$pet = $stmt->fetch(PDO::FETCH_ASSOC);

// Егер дерекқорда бұл ID табылмаса, ID-ге қарай мысалдарды шығару
if (!$pet) {
    if ($id == 2) {
        $pet = [
            'title' => 'Шотланд мысығы',
            'status' => 'ТАБЫЛДЫ',
            'city' => 'Астана к., Есіл ауданы',
            'description' => 'Сұр түсті шотландтық құлағы бүгулі мысық табылды. Өте жуас, таза үй мысығы сияқты.',
            'color' => 'Сұр (Күлгін реңкті)',
            'date' => '2026-10-25',
            'owner' => 'Меруерт (Тауып алған)',
            'phone' => '+7 (702) 555-44-33',
            'image' => 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=800'
        ];
    } elseif ($id == 3) {
        $pet = [
            'title' => 'Бигль «Макс»',
            'status' => 'ЖОҒАЛДЫ',
            'city' => 'Шымкент к., Орталық саябақ',
            'description' => 'Үш түсті бигль тұқымды күшік жоғалды. Мойнында қызыл қарғыбауы бар, атын атаса келеді.',
            'color' => 'Үш түсті (Ақ, қара, қоңыр)',
            'date' => '2026-10-26',
            'owner' => 'Қайрат (Иесі)',
            'phone' => '+7 (777) 888-99-00',
            'image' => 'https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=800'
        ];
    } else {
        $pet = [
            'title' => 'Ретривер «Бобби»',
            'status' => 'ЖОҒАЛДЫ',
            'city' => 'Алматы к., Абай даңғылы',
            'description' => 'Алтын түстес ретривер, мойнында көк қарғыбауы бар. Өте мейірімді, адамдарға үйір.',
            'color' => 'Алтын түстес (Сары)',
            'date' => '2026-10-24',
            'owner' => 'Айдын (Иесі)',
            'phone' => '+7 (701) 234-56-78',
            'image' => 'https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=800'
        ];
    }
} else {
    // Дерекқордан шыққан мәліметтерді өңдеу
    $pet['color'] = $pet['color'] ?? 'Көрсетілмеген';
    $pet['date'] = $pet['created_at'] ?? 'Жақында';
    $pet['owner'] = 'Хабарландыру авторы';
    $pet['phone'] = '+7 (700) 000-00-00';
    $pet['image'] = !empty($pet['image']) ? 'uploads/' . $pet['image'] : 'https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=800';
}

$badgeColor = ($pet['status'] == 'Табылды') ? 'bg-emerald-100 text-emerald-700' : 'bg-red-100 text-red-700';
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pet['title']) ?> — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 font-sans">
    <?php include 'nav.php'; ?>

    <div class="max-w-4xl mx-auto px-4 py-10">
        <a href="home.php" class="inline-flex items-center gap-2 mb-6 text-sm font-semibold text-amber-600 hover:text-amber-700 transition">
            <i class="fa-solid fa-arrow-left"></i> Басты бетке қайту
        </a>

        <div class="bg-white rounded-3xl shadow-xl border border-slate-200 overflow-hidden grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
            <!-- Сурет -->
            <div class="overflow-hidden rounded-2xl shadow-md h-80">
                <img src="<?= htmlspecialchars($pet['image']) ?>" alt="Жануар суреті" class="w-full h-full object-cover">
            </div>

            <!-- Ақпараттар -->
            <div class="flex flex-col justify-between">
                <div>
                    <span class="<?= $badgeColor ?> text-xs px-3.5 py-1.5 rounded-full font-bold uppercase inline-block"><?= htmlspecialchars($pet['status']) ?></span>
                    <h1 class="text-2xl font-black text-slate-800 mt-3"><?= htmlspecialchars($pet['title']) ?></h1>
                    
                    <div class="mt-4 space-y-2.5 text-sm text-slate-600">
                        <p class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-amber-500 w-5"></i> <b>Мекенжайы:</b> <?= htmlspecialchars($pet['city']) ?></p>
                        <p class="flex items-center gap-2"><i class="fa-solid fa-palette text-amber-500 w-5"></i> <b>Түсі / Сипаты:</b> <?= htmlspecialchars($pet['color']) ?></p>
                        <p class="flex items-center gap-2"><i class="fa-solid fa-calendar text-amber-500 w-5"></i> <b>Жоғалған күні:</b> <?= htmlspecialchars($pet['date']) ?></p>
                        <p class="flex items-center gap-2"><i class="fa-solid fa-user text-amber-500 w-5"></i> <b>Байланыстағы тұлға:</b> <?= htmlspecialchars($pet['owner']) ?></p>
                    </div>

                    <div class="mt-5 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                        <p class="text-xs font-bold text-slate-700 mb-1">Толық сипаттама:</p>
                        <p class="text-xs text-slate-600 leading-relaxed"><?= htmlspecialchars($pet['description']) ?></p>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="chat.php" class="block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-3.5 rounded-2xl transition text-sm shadow-md flex items-center justify-center gap-2">
                        <i class="fa-solid fa-comments"></i> Иесіне хабарласу / Чатқа өту
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>