touch database/database.sqlite

 cp .env.example .env

docker run -d -p 80:80 --name rehber --restart unless-stopped -v ${PWD}:/var/www/html heykodi/php-74-lrv

docker exec -it rehber composer install 
docker exec -it rehber php artisan key:generate

docker exec -it rehber php artisan migrate
docker exec -it rehber php artisan db:seed
