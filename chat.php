<?php 
include 'db.php'; 
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чат — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 font-sans h-screen flex flex-col overflow-hidden">

    <!-- Навигация панелі -->
    <?php include 'nav.php'; ?>

    <!-- Негізгі чат контейнері -->
    <div class="max-w-7xl w-full mx-auto px-4 py-6 flex-1 flex flex-col overflow-hidden">
        
        <h1 class="text-xl font-extrabold text-slate-800 mb-4 flex items-center gap-2">
            <i class="fa-solid fa-comments text-amber-500"></i> Хабарламалар чаты
        </h1>

        <div class="bg-white rounded-3xl shadow-md border border-slate-200 flex-1 flex overflow-hidden">
            
            <!-- Сол жақ: Чаттар тізімі -->
            <div class="w-1/3 border-r border-slate-200 flex flex-col bg-slate-50/50">
                <div class="p-4 border-b border-slate-200">
                    <input type="text" placeholder="Іздеу..." class="w-full px-3 py-2 bg-white rounded-xl border border-slate-200 text-xs outline-none">
                </div>
                <div class="flex-1 overflow-y-auto divide-y divide-slate-100">
                    <!-- Белсенді чат -->
                    <div class="p-4 hover:bg-slate-100 transition cursor-pointer bg-amber-50/60 border-l-4 border-amber-500">
                        <div class="flex justify-between items-center mb-1">
                            <h4 class="font-bold text-sm text-slate-800">Айдын</h4>
                            <span class="text-[10px] text-slate-400">16:10</span>
                        </div>
                        <p class="text-xs text-slate-500 truncate">Сәлеметсіз бе! Мен сіздің хабарландыруыңызды көрдім...</p>
                    </div>
                    <!-- Екінші чат -->
                    <div class="p-4 hover:bg-slate-100 transition cursor-pointer">
                        <div class="flex justify-between items-center mb-1">
                            <h4 class="font-bold text-sm text-slate-800">Дильназ</h4>
                            <span class="text-[10px] text-slate-400">Кеше</span>
                        </div>
                        <p class="text-xs text-slate-500 truncate">Ретривер Бобби...</p>
                    </div>
                </div>
            </div>

            <!-- Oң жақ: Хабарлама алмасу аймағы -->
            <div class="flex-1 flex flex-col bg-white">
                
                <!-- Чат тақырыбы -->
                <div class="p-4 border-b border-slate-200 flex items-center justify-between bg-white">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-bold">
                            А
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-slate-800">Айдын</h3>
                            <p class="text-[10px] text-emerald-600 font-semibold">● Желіде</p>
                        </div>
                    </div>
                </div>

                <!-- Хабарламалар тарихы -->
                <div class="flex-1 p-6 overflow-y-auto space-y-4 bg-slate-50/30">
                    <!-- Кіріс хабарлама -->
                    <div class="flex items-end gap-2 max-w-md">
                        <div class="bg-white px-4 py-3 rounded-2xl rounded-bl-sm shadow-sm border border-slate-100 text-xs text-slate-700 leading-relaxed">
                            Сәлеметсіз бе! Мен сіздің хабарландыруыңызды көрдім. Мен кеше саябақ жақтан көрген секілдімін алтын түсті ит еді.
                        </div>
                    </div>

                    <!-- Шығыс хабарлама -->
                    <div class="flex items-end justify-end gap-2">
                        <div class="bg-amber-500 text-white px-4 py-3 rounded-2xl rounded-br-sm shadow-sm text-xs leading-relaxed">
                            Иә, рақмет! Толығырақ айтып көмектесе аласыз ба.
                        </div>
                    </div>
                </div>

                <!-- Хабарлама жазатын жолақ (Төменде қатайтылған) -->
                <div class="p-4 border-t border-slate-200 bg-white flex items-center gap-2">
                    <input type="text" placeholder="Хабарлама жазу..." class="flex-1 px-4 py-3 rounded-xl border border-slate-200 text-xs outline-none bg-slate-50 focus:bg-white transition">
                    <button class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-3 rounded-xl transition text-xs font-bold shadow-md flex items-center justify-center">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>

            </div>

        </div>

    </div>

</body>
</html>