<?php 
include 'db.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $type = $_POST['type'] ?? '';
    $city = $_POST['city'] ?? '';
    $status = $_POST['status'] ?? 'Жоғалды';
    $description = $_POST['description'] ?? '';
    
    // CRUD Create логикасы (PDO арқылы базаға қосу)
    $stmt = $pdo->prepare("INSERT INTO pets (title, type, city, status, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $type, $city, $status, $description]);
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хабарландыру қосу — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans">
    <?php include 'nav.php'; ?>
    <div class="max-w-3xl mx-auto px-4 py-8">
        <div class="bg-white p-8 rounded-3xl shadow border">
            <h1 class="text-2xl font-black text-slate-800 mb-6">Жаңа хабарландыру жариялау</h1>
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1">Тақырыбы / Аты</label>
                    <input type="text" name="title" required placeholder="Мысалы: Хаски «Локи» жоғалды" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">Жануар түрі</label>
                        <select name="type" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                            <option>Ит</option>
                            <option>Мысық</option>
                            <option>Басқа</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">Қала</label>
                        <input type="text" name="city" required placeholder="Алматы" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1">Мәртебесі</label>
                    <select name="status" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                        <option value="Жоғалды">Жоғалды</option>
                        <option value="Табылды">Табылды</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1">Толық сипаттамасы</label>
                    <textarea name="description" rows="4" placeholder="Мойнындағы қарғыбау түсі..." class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm"></textarea>
                </div>
                <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-bold py-3.5 rounded-xl shadow transition">
                    Хабарландыруды жариялау
                </button>
            </form>
        </div>
    </div>
</body>
</html>
