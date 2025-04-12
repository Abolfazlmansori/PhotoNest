<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# PhotoNest - گالری تصاویر

**PhotoNest** یک گالری تصاویر ساده و کاربرپسند است که با استفاده از **Laravel** و **Tailwind CSS** ساخته شده است. این پروژه به کاربران این امکان را می‌دهد که تصاویر خود را آپلود کرده و در قالب یک گالری زیبا مشاهده کنند. همچنین، تصاویر آپلود شده به صورت مستقیم در صفحه گالری نمایش داده می‌شوند و کاربران می‌توانند بر روی تصاویر کلیک کرده و آن‌ها را در یک لایت‌باکس مشاهده کنند.

## ویژگی‌ها

- **آپلود تصاویر**: کاربران می‌توانند تصاویر خود را از سیستم خود انتخاب کرده و آن‌ها را به گالری اضافه کنند.
- **نمایش تصاویر**: گالری تصاویر به صورت ریسپانسیو و با طراحی جذاب نمایش داده می‌شود.
- **لایت‌باکس**: تصاویر به صورت لایت‌باکس نمایش داده می‌شوند که امکان مشاهده تصویر در اندازه بزرگتر را می‌دهد.

## تکنولوژی‌های استفاده شده

- **Laravel**: فریمورک PHP برای ساخت بخش بک‌اند
- **Tailwind CSS**: فریمورک CSS برای طراحی ریسپانسیو و زیبا
- **GLightbox**: برای نمایش تصاویر در لایت‌باکس
- **Swiper**: برای ساخت اسلایدرهای کاربرپسند
- **هوش مصنوعی**: طراحی فرانت‌اند با کمک هوش مصنوعی، که برای بهبود تجربه کاربری و ساده‌سازی طراحی انجام شده است.

## نصب و راه‌اندازی

1. **کلون کردن پروژه**:
   ابتدا پروژه را از گیت‌هاب کلون کنید:

   ```bash
   git clone https://github.com/username/your-repo-name.git
نصب وابستگی‌ها: وارد دایرکتوری پروژه شوید و دستور زیر را برای نصب وابستگی‌ها اجرا کنید:

bash
Copy
Edit
cd your-repo-name
composer install
تنظیمات محیط: فایل .env را از .env.example کپی کنید:

bash
Copy
Edit
cp .env.example .env
سپس تنظیمات دیتابیس و دیگر پیکربندی‌های لازم را در فایل .env انجام دهید.

ایجاد جداول دیتابیس: با اجرای دستور زیر، جداول دیتابیس را بسازید:

bash
Copy
Edit
php artisan migrate
اجرای پروژه: برای اجرای پروژه، از دستور زیر استفاده کنید:

bash
Copy
Edit
php artisan serve
حالا می‌توانید پروژه را در مرورگر خود در آدرس http://localhost:8000 مشاهده کنید.

اسکرین‌شات‌ها
گالری تصاویر

صفحه آپلود تصویر

دمو آنلاین
برای مشاهده دمو آنلاین پروژه، می‌توانید به لینک زیر مراجعه کنید:

Demo of PhotoNest

مشارکت در پروژه
اگر دوست دارید به این پروژه کمک کنید، خوشحال می‌شویم که همکاری کنید. مراحل زیر برای مشارکت به شما کمک می‌کند:

این پروژه را Fork کنید.

تغییرات خود را اعمال کرده و Pull Request ارسال کنید.

از پروژه لذت ببرید!

نویسنده
Abolfazl Mansori
GitHub

لایسنس
این پروژه تحت لایسنس MIT منتشر شده است.
