<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گالری تصاویر | PhotoNest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen p-6">
<!-- Header Section -->
@extends('Gallery.pages.layout.header')
<br>
<!-- Main Content -->
<div class="max-w-6xl mx-auto mt-10" id="gallery">
    <h2 class="text-3xl font-bold text-center mb-10 text-indigo-400">گالری تصاویر</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($pictures as $picture)
            <div class="overflow-hidden rounded-xl shadow-lg relative">
                <a href="{{ asset('images/'.$picture->image_name) }}" class="glightbox" data-gallery="gallery-grid" data-title="{{ $picture->caption ?? 'تصویر بدون عنوان' }}">
                    <img src="{{ asset('images/'.$picture->image_name) }}" class="w-full h-48 object-cover hover:scale-105 transition duration-300" alt="تصویر نمونه">
                </a>
                <!-- دکمه حذف -->
                <form action="{{ route('gallery.destroy', $picture->id) }}" method="POST" class="absolute top-2 left-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="  text-white rounded-full p-2 focus:outline-none">
                        ❌
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
</script>
</body>
</html>
