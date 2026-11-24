<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Басты бет — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .custom-gradient {
            background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%);
        }
    </style>
</head>
<body class="bg-slate-100 font-sans">

    <!-- Навигация панелі -->
    <?php include 'nav.php'; ?>

    <!-- Жоғарғы креативті баннер және іздеу -->
    <div class="custom-gradient text-white py-14 px-4 text-center shadow-xl relative overflow-hidden">
        <!-- Фондағы декоративті элементтер -->
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-black/10 rounded-full blur-2xl"></div>

        <div class="max-w-4xl mx-auto relative z-10">
            <span class="bg-white/20 text-white text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wider mb-4 inline-block backdrop-blur-md shadow-sm">
                <i class="fa-solid fa-heart text-red-200 mr-1.5"></i> Үй жануарларына арналған бірыңғай көмек орталығы
            </span>
            <h1 class="text-3xl md:text-5xl font-black mb-4 tracking-tight">Жоғалған үй жануарларын бірге табайық</h1>
            <p class="text-sm md:text-base text-amber-100 mb-8 max-w-xl mx-auto">Төрт аяқты достарымыз үйіне аман-есен оралуы үшін бір көмекші болайық.</p>
            
            <!-- Көлденең іздеу панелі -->
            <form method="GET" action="home.php" class="bg-white p-3 rounded-2xl shadow-2xl flex flex-col md:flex-row gap-3 max-w-3xl mx-auto">
                <div class="flex-1 flex items-center px-3 bg-slate-50 rounded-xl border border-slate-200">
                    <i class="fa-solid fa-paw text-amber-500 mr-2.5"></i>
                    <input type="text" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" placeholder="Жануар түрі немесе аты (мысалы: Бобби)..." class="w-full py-2.5 bg-transparent text-slate-800 text-sm outline-none">
                </div>
                <div class="w-full md:w-48 flex items-center px-3 bg-slate-50 rounded-xl border border-slate-200">
                    <i class="fa-solid fa-location-dot text-amber-500 mr-2.5"></i>
                    <select name="city" class="w-full py-2.5 bg-transparent text-slate-800 text-sm outline-none cursor-pointer">
                        <option value="">Барлық қалалар</option>
                        <option value="Алматы" <?= (($_GET['city'] ?? '') == 'Алматы') ? 'selected' : '' ?>>Алматы</option>
                        <option value="Астана" <?= (($_GET['city'] ?? '') == 'Астана') ? 'selected' : '' ?>>Астана</option>
                        <option value="Шымкент" <?= (($_GET['city'] ?? '') == 'Шымкент') ? 'selected' : '' ?>>Шымкент</option>
                    </select>
                </div>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold px-7 py-3 rounded-xl transition text-sm shadow flex items-center justify-center">
                    <i class="fa-solid fa-search mr-2"></i> Іздеу
                </button>
            </form>
        </div>
    </div>

    <!-- Қызықты креативті блоктар (Ақ фонда емес, ерекше элементтер) -->
    <div class="max-w-7xl mx-auto px-4 -mt-6 relative z-20 mb-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-slate-100 flex items-start gap-4 hover:translate-y-[-2px] transition">
                <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl font-bold shrink-0 shadow-inner">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800 text-sm mb-1">Жедел жариялау</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Хабарландыруды бірнеше секунд ішінде жүйеге қосып, мыңдаған адамға көрсетіңіз.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-slate-100 flex items-start gap-4 hover:translate-y-[-2px] transition">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold shrink-0 shadow-inner">
                    <i class="fa-solid fa-shield-cat"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800 text-sm mb-1">Қауіпсіз байланыс</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Табылған жануарлар мен иелері арнайы ішкі чат арқылы қауіпсіз хабарласады.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-lg border border-slate-100 flex items-start gap-4 hover:translate-y-[-2px] transition">
                <div class="w-12 h-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center text-xl font-bold shrink-0 shadow-inner">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800 text-sm mb-1">Еріктілер көмегі</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">Қала бойынша белсенді волонтерлер мен іздеу топтарының қолдауы.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Соңғы хабарландырулар тізімі -->
    <div class="max-w-7xl mx-auto px-4 pb-16">
        <div class="flex items-center justify-between mb-6 border-b border-slate-200 pb-3">
            <h2 class="text-xl font-extrabold text-slate-800 flex items-center gap-2">
                <i class="fa-solid fa-fire text-amber-500"></i> Соңғы хабарландырулар
            </h2>
            <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">Барлық жазбалар</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            try {
                $search = $_GET['search'] ?? '';
                $city = $_GET['city'] ?? '';

                $query = "SELECT * FROM pets WHERE 1=1";
                $params = [];

                if (!empty($search)) {
                    $query .= " AND (title LIKE ? OR description LIKE ?)";
                    $params[] = "%$search%";
                    $params[] = "%$search%";
                }
                if (!empty($city)) {
                    $query .= " AND city LIKE ?";
                    $params[] = "%$city%";
                }

                $query .= " ORDER BY id DESC";
                $stmt = $pdo->prepare($query);
                $stmt->execute($params);
                $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($pets) > 0) {
                    foreach ($pets as $pet) {
                        $badgeColor = ($pet['status'] == 'Табылды') ? 'bg-emerald-100 text-emerald-700' : 'bg-red-100 text-red-700';
                        $imagePath = !empty($pet['image']) ? 'uploads/' . htmlspecialchars($pet['image']) : 'https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=500';
                        $petId = $pet['id'] ?? 1;

                        echo '
                        <a href="pet-details.php?id='.$petId.'" class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 overflow-hidden flex flex-col justify-between group">
                            <div>
                                <div class="relative overflow-hidden h-56">
                                    <img src="'.$imagePath.'" alt="Жануар суреті" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                    <span class="absolute top-3 left-3 '.$badgeColor.' text-xs px-3 py-1 rounded-full font-bold shadow-sm">'.$pet['status'].'</span>
                                </div>
                                <div class="p-5">
                                    <h3 class="font-bold text-lg text-slate-800 group-hover:text-amber-600 transition">'.htmlspecialchars($pet['title']).'</h3>
                                    <p class="text-xs text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> '.htmlspecialchars($pet['city']).'</p>
                                    <p class="text-xs text-slate-600 mt-3 line-clamp-2">'.htmlspecialchars($pet['description']).'</p>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <span class="text-xs font-bold text-amber-600 flex items-center gap-1 group-hover:translate-x-1 transition">
                                    Толығырақ көру <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </span>
                            </div>
                        </a>';
                    }
                } else {
                    // Әдемі мысал карточкалар
                    echo '
                    <a href="pet-details.php?id=1" class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 overflow-hidden flex flex-col justify-between group">
                        <div>
                            <div class="relative overflow-hidden h-56">
                                <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=500" alt="Бобби" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <span class="absolute top-3 left-3 bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full font-bold shadow-sm">ЖОҒАЛДЫ</span>
                            </div>
                            <div class="p-5">
                                <h3 class="font-bold text-lg text-slate-800 group-hover:text-amber-600 transition">Ретривер «Бобби»</h3>
                                <p class="text-xs text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> Алматы к., Абай даңғылы</p>
                                <p class="text-xs text-slate-600 mt-3 line-clamp-2">Алтын түстес ретривер, мойнында көк қарғыбауы бар. Өте мейірімді...</p>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-0">
                            <span class="text-xs font-bold text-amber-600 flex items-center gap-1 group-hover:translate-x-1 transition">Толығырақ көру <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                    <a href="pet-details.php?id=2" class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 overflow-hidden flex flex-col justify-between group">
                        <div>
                            <div class="relative overflow-hidden h-56">
                                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=500" alt="Мысық" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <span class="absolute top-3 left-3 bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-bold shadow-sm">ТАБЫЛДЫ</span>
                            </div>
                            <div class="p-5">
                                <h3 class="font-bold text-lg text-slate-800 group-hover:text-amber-600 transition">Шотланд мысығы</h3>
                                <p class="text-xs text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> Астана к., Есіл ауданы</p>
                                <p class="text-xs text-slate-600 mt-3 line-clamp-2">Сұр түсті шотландтық құлағы бүгулі мысық табылды. Иесін күтеміз...</p>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-0">
                            <span class="text-xs font-bold text-amber-600 flex items-center gap-1 group-hover:translate-x-1 transition">Толығырақ көру <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>

                    <a href="pet-details.php?id=3" class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-200 overflow-hidden flex flex-col justify-between group">
                        <div>
                            <div class="relative overflow-hidden h-56">
                                <img src="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=500" alt="Макс" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <span class="absolute top-3 left-3 bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full font-bold shadow-sm">ЖОҒАЛДЫ</span>
                            </div>
                            <div class="p-5">
                                <h3 class="font-bold text-lg text-slate-800 group-hover:text-amber-600 transition">Бигль «Макс»</h3>
                                <p class="text-xs text-slate-500 mt-1"><i class="fa-solid fa-location-dot text-amber-500 mr-1"></i> Шымкент к., Орталық саябақ</p>
                                <p class="text-xs text-slate-600 mt-3 line-clamp-2">Үш түсті бигль тұқымды күшік жоғалды. Көргендерге сыйақы бар...</p>
                            </div>
                        </div>
                        <div class="px-5 pb-5 pt-0">
                            <span class="text-xs font-bold text-amber-600 flex items-center gap-1 group-hover:translate-x-1 transition">Толығырақ көру <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                        </div>
                    </a>';
                }
            } catch (PDOExceptionD $e) {
                echo '<p class="text-red-500 text-xs col-span-3">Қате: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>
    </div>

</body>
</html>