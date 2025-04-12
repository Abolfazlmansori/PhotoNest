<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>افزودن تصویر | PhotoNest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">
@extends('Gallery.pages.layout.header')
<div class="bg-gray-800 shadow-xl rounded-2xl p-8 w-full max-w-md space-y-6 mt-24 mx-auto">
    <h2 class="text-2xl font-semibold text-center text-indigo-400">آپلود تصویر</h2>
    <form class="space-y-4" method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="photo" class="block mb-2 text-sm text-gray-300">انتخاب تصویر</label>
            <input type="file" name="image_name" id="photo" accept="image/*" class="w-full p-2 rounded-lg bg-gray-700 text-white border border-gray-600">
        </div>
        <!-- پیش‌نمایش تصویر -->
        <div id="previewContainer" class="hidden mt-4">
            <p class="mb-2 text-sm text-gray-400">پیش‌نمایش تصویر:</p>
            <img id="previewImage" class="w-full rounded-lg shadow-lg" alt="پیش‌نمایش تصویر" />
        </div>
        <!-- دکمه ارسال -->
        <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 rounded-lg py-2 transition">
            آپلود کن
        </button>
    </form>
</div>
<!-- اسکریپت برای پیش‌نمایش تصویر -->
<script>
    const photoInput = document.getElementById('photo');
    const previewImage = document.getElementById('previewImage');
    const previewContainer = document.getElementById('previewContainer');

    photoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            previewContainer.classList.add('hidden');
            previewImage.src = '';
        }
    });
</script>
</body>
</html>
