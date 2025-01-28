# Tutorial https://kinsta.com/pt/blog/testes-unidade-laravel/

https://github.com/VirtuaCreative/kinsta-laravel-blog


Cria o arquivo test
```
php artisan make:test PostModelFunctionalityTest --unit
```

Roda o test
```
php artisan test tests/Unit/PostModelFunctionalityTest.php
```

### Testes e bancos de dados


Cria o arquivo test
```
php artisan make:test PostCreationTest --unit
```

Roda o test
```
php artisan test tests/Unit/PostCreationTest.php
```

### Teste de recursos

Cria o arquivo test
```
php artisan make:test PostControllerTest
```

Roda o test
```
php artisan test tests/Feature/PostControllerTest.php
```