<?php
session_start();
// Кіру және тіркелу беті
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кіру / Тіркелу — PetFinder KZ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4 font-sans">
    <div class="bg-white w-full max-w-md rounded-3xl shadow-xl overflow-hidden border border-slate-200">
        <div class="bg-amber-500 p-6 text-center text-white">
            <div class="text-3xl font-black flex items-center justify-center gap-2 mb-1">
                <i class="fa-solid fa-paw"></i> PetFinder KZ
            </div>
            <p class="text-xs opacity-90">Жеке кабинетке кіру немесе жаңа аккаунт ашу</p>
        </div>
        <div class="grid grid-cols-2 border-b border-slate-200 text-sm font-bold">
            <button id="tab-login" onclick="switchTab('login')" class="py-3.5 text-amber-600 border-b-2 border-amber-500 transition">Жүйеге кіру</button>
            <button id="tab-register" onclick="switchTab('register')" class="py-3.5 text-slate-400 hover:text-slate-600 transition">Тіркелу</button>
        </div>
        <form id="form-login" class="p-6 space-y-4" action="home.php" method="POST">
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Электронды пошта</label>
                <input type="email" name="email" required placeholder="damila@gmail.com" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Құпия сөз</label>
                <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-bold py-3.5 rounded-xl shadow-md transition">
                Жүйеге кіру
            </button>
        </form>
        <form id="form-register" class="p-6 space-y-4 hidden" action="home.php" method="POST">
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Аты-жөніңіз</label>
                <input type="text" name="name" required placeholder="Хамит Дамила" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Телефон нөмір</label>
                <input type="tel" name="phone" required placeholder="+7 (777) 000-00-00" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Электронды пошта</label>
                <input type="email" name="email" required placeholder="damila@gmail.com" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-600 mb-1">Құпия сөз жасау</label>
                <input type="password" name="password" required placeholder="••••" class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
            <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3.5 rounded-xl shadow-md transition">
                Тіркелуді аяқтау
            </button>
        </form>
        <div class="bg-slate-50 p-4 text-center border-t border-slate-100">
            <a href="home.php" class="text-xs text-slate-500 hover:text-amber-600 font-medium">Тіркелмей-ақ басты бетке өту →</a>
        </div>
    </div>
    <script>
        function switchTab(tab) {
            const loginForm = document.getElementById('form-login');
            const regForm = document.getElementById('form-register');
            const tabLogin = document.getElementById('tab-login');
            const tabReg = document.getElementById('tab-register');
            if (tab === 'login') {
                loginForm.classList.remove('hidden');
                regForm.classList.add('hidden');
                tabLogin.className = "py-3.5 text-amber-600 border-b-2 border-amber-500 transition";
                tabReg.className = "py-3.5 text-slate-400 hover:text-slate-600 transition";
            } else {
                regForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
                tabReg.className = "py-3.5 text-amber-600 border-b-2 border-amber-500 transition";
                tabLogin.className = "py-3.5 text-slate-400 hover:text-slate-600 transition";
            }
        }
    </script>
</body>
</html>
