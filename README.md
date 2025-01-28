# Tutorial https://kinsta.com/pt/blog/testes-unidade-laravel/

https://github.com/VirtuaCreative/kinsta-laravel-blog

### Create a Test
Create test file
```
php artisan make:test PostModelFunctionalityTest --unit
```

Run test
```
php artisan test tests/Unit/PostModelFunctionalityTest.php
```

### DataBase Tests


Create test file
```
php artisan make:test PostCreationTest --unit
```

Run test
```
php artisan test tests/Unit/PostCreationTest.php
```

### Features Tests

Create test file
```
php artisan make:test PostControllerTest
```

Run test
```
php artisan test tests/Feature/PostControllerTest.php
```

### See test coverage

Retrieves a percentage of how much instances were tested. Like, when this line on readme was commit only 83% of PostController was coveraged

See all percentage of coverage in terminal
```
php artisan test --coverage
```

See in terminal, specified minimum coverage 
```
php artisan test --coverage --min=85
```