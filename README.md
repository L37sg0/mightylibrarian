## mightylibrarian
### Library Mangement system build with Laravel

### Requirements:
 - RAM: 1G
 - Storage: 1G
 - CPU cores: 1
 - Docker engine v. 20.10.22+
 - Docker Compose v. 1.29.2+

### Demo:
 - http://mightylibrarian.l37sg0.com/

### Installation:

```bash
git clone https://github.com/L37sg0/mightylibrarian.git
cd mightylibrarian
docker-compose up -d
cp mightylibrarian/.env.example mightylibrarian/.env
docker-compose exec app composer install -d mightylibrarian
docker-compose exec app php mightylibrarian/artisan migrate --seed
docker-compose exec app php mightylibrarian/artisan library:index:import
```

### Usage:
 Go to your server port 80 click Register and register new user
 Next login with your username and password and use the system.
 
### Info:
 - frontend build fully with Bootstrap 5.3
 - Laravel version 9
 - PHP 8
 - search engine Meilisearch through laravel.scout package
 - live search on forms build with livewire
 - Sections: Dashboard, Authors, Books, Book Issues, Categories, Publishers, Students, Settings
 - Authentication - very basic, self build with middleware guard 'auth'

### Images:
![front-desktop.png](screenshots%2Ffront-desktop.png)
![front-mobile.png](screenshots%2Ffront-mobile.png)
![book-issues.png](screenshots%2Fbook-issues.png)
![login-mobile.png](screenshots%2Flogin-mobile.png)
![register-desktop.png](screenshots%2Fregister-desktop.png)
![dash-mobile.png](screenshots%2Fdash-mobile.png)
![book-issues-edit.png](screenshots%2Fbook-issues-edit.png)
![search-bar.png](screenshots%2Fsearch-bar.png)
![flash-message.png](screenshots%2Fflash-message.png)
![flash-errors.png](screenshots%2Fflash-errors.png)
![authors-mobile.png](screenshots%2Fauthors-mobile.png)
