FROM php:8.1.0-apache
# composer php.iniをコピー
COPY ./php.ini /usr/local/etc/php/
# composer インストール (マルチステージビルド)
COPY --from=composer:2.1.9 /usr/bin/composer /usr/bin/composer
# apt(Advanced Package Tool) パッケージインストール
# PDO driver インストール(mysql)
# mod_rewrite 有効化
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    vim \
    zip \
    npm \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite

# DocumentRoot 変更
RUN sed -i 's!/var/www/html!/var/www/app/public!g' /etc/apache2/sites-available/000-default.conf

RUN apt-get update &&\
  # JPEG 対応
  apt-get install -y zlib1g-dev libpng-dev libjpeg62-turbo-dev &&\
  docker-php-ext-configure gd --with-jpeg &&\
  docker-php-ext-install -j$(nproc) gd