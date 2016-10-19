## Instalacja

1. Sprawdz uid i gid user'a z hosta i popraw w `docker-compose.yml` `user` 

## Cel Spotkania

Wspólne przekazywanie wiedzy. Nauka podejścia TDD oraz podstawowych informacji 
 związnych DDD. 

## Wymagania - umiejętności

* Znajomość [dockera](https://www.conetix.com.au/blog/docker-basics-practical-starters-guide) w stopniu bazowym. (uruchomienie + wejście na kontener).
Wystarczy wiedza z warsztatów, które prowadził Michał Brzuchalski
* Znajomość [phpspec'a](http://www.phpspec.net/en/stable/manual/introduction.html) na poziomie bazowym. 
 Preferowany średnio-zaawansowany (`mocki`, `stuby`).
* Znajomość [PHP 7.x](http://php.net/manual/en/migration70.new-features.php), na poziomie średnio-zaawansowanym (`type hints`, `return types`) 

## Wymagania - software

Będziemy pracować w parach dwuosobowych. 
Więc na jedną parę musi przypadać laptop z:

* Phpstorm w wersji minimum `2016.2`
* Zainstalowany `docker` (ver. 1.12.1) oraz `docker-compose` (min. ver. 1.7.1)

## Zasady Spotkania

1. Stosujemy TDD. Każdy produkcyjny kod, musi być poprzedzony testem. 
Będziemy się uczyć tego podejścia, więc nie jest wymagana jego znajomość.
2. Nie stosujemy żadnych, ale to żadnych `test.php` i innych takich. To testy mają 
dawać nam feedback a nie pseudo skrypty, które później są usuwane.
3. Każde rozwiązanie które działa, jest dobre. 
 Jeżeli nie mamy pomysłu na ładny kod, to najpierw implementujemy tak, aby
 działało, dopiero później refactorujemy, aby było łądnie.
4. Nie szukamy gotowych rozwiązań w internecie. Jeżeli czegoś nie wiemy, 
pytamy. Chodzi o to, aby samemu coś stworzyć :)


## TDD FLOW
### Red Green Refactor

1. `Red` - Najpierw napisz test, który nie przechodzi, ale opisuje to co chcesz
sprawdzić
2. `Green` - Napisz minimalną ilość kodu, aby test przechodził
3. `Refactor` - Zrefactoruj testy, wypnij duplikaty to osobnych metod, usuń powtarzające
 się testy, generalnie upiększyj je. 
 Następnie przejdź do kodu produkcyjnego i zrób to samo.