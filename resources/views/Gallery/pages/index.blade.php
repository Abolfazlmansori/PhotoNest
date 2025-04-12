<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>PhotoNest | خانه</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-gray-900 to-gray-800 text-white min-h-screen flex items-center justify-center dark">
<div class="text-center space-y-6">
    <h1 class="text-4xl font-bold text-white">به <span class="text-indigo-400">PhotoNest</span> خوش اومدی</h1>
    <p class="text-gray-300">مدیریت حرفه‌ای تصاویر، سریع و امن</p>
    <div class="flex justify-center gap-4">
        <a href="{{route('gallery.pictures.create')}}" class="px-6 py-2 bg-indigo-500 hover:bg-indigo-600 transition rounded-xl">افزودن تصویر</a>
        <a href="{{route('gallery.pictures')}}" class="px-6 py-2 border border-indigo-300 hover:bg-indigo-700 transition rounded-xl">مشاهده گالری</a>
    </div>
</div>
</body>
</html>
