# MySql

### Submodule Installation
```
git submodule add https://github.com/nemundo/mysql.git lib/mysql
```


### config.php
```
$lib = new Library($autoload);
$lib->source = __DIR__ . '/lib/mysql/src/';
$lib->namespace = 'Nemundo\\MySql';
```