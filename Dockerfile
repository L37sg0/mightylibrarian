FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    bash \
    gzip \
    lsof \
    sed \
    tar \
    cron \
    libcurl4-openssl-dev \
    libxml2-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libzip-dev \
    libxslt1-dev \
    libwebp-dev \
    libxpm-dev \
    libfreetype6-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    --with-xpm \
    --with-webp \
    && docker-php-ext-install  \
    gd \
    bcmath  \
    intl \
    pdo_mysql \
    simplexml \
    soap \
    sockets \
    xsl \
    zip

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for the application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www \
    && chmod u+s /usr/sbin/cron

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000