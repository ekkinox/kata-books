# Code Kata: Harry Potter Bookstore

## Kata Subject

The code kata subject can be found [at this link](http://codingdojo.org/kata/Potter/).

## Behavior Driven Development

This implementation was made in BDD approach, using coupled:
- [Behat](http://behat.org)
- [PHPSpec](http://www.phpspec.net)
- [PHPUnit](https://phpunit.de)

## Installation

Build & up provided docker containers stack
```
$ docker-compose up -d
```

Install PHP dependencies with provided composer (PHP 7.1) container
```
$ docker run --rm -v $(pwd):/app katabooks_kata_books_composer install
```

Down & rebuild containers stack for vendor mounting (may need permissions fix for vendor/ folder)
```
$ docker-compose down &&  docker-compose up -d --build
```

## Usage

You can run the bookshop cart simulator using
```
$ docker exec -it <phpfpm7.1_container_id> bin/cart-simulator
```

## Run tests

You can retrieve the `<phpfpm7.1_container_id>` using `$ docker ps`

**Behat** test suites (configuration in behat.yml)
```
$ docker exec -it <phpfpm7.1_container_id> vendor/bin/behat
```

**PHPSpec** tests (configuration in phpspec.yml)
```
$ docker exec -it <phpfpm7.1_container_id> vendor/bin/phpspec run
```

**PHPUnit** tests (configuration in phpunit.xml)
```
$ docker exec -it <phpfpm7.1_container_id> vendor/bin/phpunit
```
