# MySql

### Installation
```
composer require nemundo/mysql
```

### Submodule Installation
```
git submodule add https://github.com/nemundo/mysql.git lib/mysql
```

### Submodule Deinstallation
```
git submodule deinit lib/mysql
git rm lib/mysql
```


### config.php
```
$lib = new Library($autoload);
$lib->source = __DIR__ . '/lib/mysql/src/';
$lib->namespace = 'Nemundo\\MySql';
```