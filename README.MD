# Zadania rekrutacyjne #1


## Getting Started
Aby uruchomić aplikację należy wykonać poniższe czynności:

```
npm install
```

Aby kompilować sass oraz js należy:
```
gulp build
```
Biblioteki frontendowe należy instalować poprzez menadżer paczek [Bower](https://bower.io/).

## Zadania do wykonania:
Poniższe zadania zostały przygotowane zarówno dla kandydatów na stanowisko front-end developera jak i fullstacka. Wykonujesz tyle zadań ile potrafisz.
1. Potnij stronę główną zgodnie z [projektami](https://www.dropbox.com/sh/yvk87kbtaky5mkk/AADN8Md8P8CsdlFiNDhL15xoa?dl=1).
   
1. Formularz na stronie powinen wysyłać ajax'em zgłoszenia do pliku `sendform.php` i obsługiwać informacje zwrotne z pliku.

1. Z pliku `jobOffers.json` pobierz oferty pracy i wyświetl je w sekcji Aktualne oferty pracy.

1. Zmodyfikuj plik `sendform.php` tak aby:
   * odbierał dane z formularza i zapisywał je w bazie danych,
   * wysyłał na zapisane dane na adres mailowy _hr-test@hypercrew.pl_,
   * zwracał odpowiedni JSON,

1. Zainstaluj blog w katalogu `wordpress` i:
   * stworzyć plugin, który w panelu będzie wyświetlał zgłoszenia z formularza, z pociętego LDP i da możliwość administratorowi akceptowanie lub usuwanie zgłoszeń,
   * dodać shortcode który na stronie w blogu będzie wyświetlał najnowsze zaakceptowane zgłoszenia z formularza,
   * do katalogu `_sql` wrzucić dump bazy.
  
Po wykonaniu zadań udostępnij nam swoje repozytorium na bitbucket lub github.



---
Repozytorium znajduje się w [BitBucket](https://bitbucket.org/hypercrewit/hypercrew-zadania-rekrutacyjne/).