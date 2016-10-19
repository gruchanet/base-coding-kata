# Przygotowanie środowiska

Uruchom komendę w terminalu `id` w terminalu i sprawdź jaki uid i gid ma twój
użytkownik. Zmień to w docker-compose.yml pod `1000:1000`
Uruchom `docker-compose up -d` 

Developujemy ze środka kontenera, wchodzimy na niego za pomocą `docker exec -it coding_kata /bin/bash`
W środku kontenera uruchamiamy `composer install`, czekamy na resztę ;)