# ![Igni logo](https://github.com/igniphp/common/blob/master/logo/full.svg)

## About
<TBA>

### Requirements

- [Docker](https://docs.docker.com/engine/installation/) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed


### Running

#### Starting application
```bash
docker-compose build
docker-compose up -d
```

#### Restarting application
```bash
docker-compose restart
```

#### Killing application
```bash
docker-compose kill
```

#### Running tests
```bash
docker-compose run igni-php ./vendor/bin/phpunit
```
