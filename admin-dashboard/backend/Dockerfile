# PHP Apache asosidagi Docker imijidan foydalanamiz
FROM php:8.1-apache

# Apache konfiguratsiyasida CORS ruxsatlarini yoqish uchun kerakli modulni yoqamiz
RUN a2enmod headers

# PHP faylingizni konteyner ichiga nusxalash
COPY . .

# Apache serverni ishga tushirish
CMD ["apache2-foreground"]
