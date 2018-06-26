# ![Igni logo](https://github.com/igniphp/common/blob/master/logo/full.svg)

## About
This repo contains sandbox environment to help you quickly start up with swoole and Igni framework. 

Application files are located in the `src` directory.

`.env` file contains information on what port and host your application should run.

`src/Application.php` contains bootstrap code required to run the application.

By default `8080` port is used and exposed to your host machine allowing you to easy preview your work,
simply just type `http://localhost:8080` in your browser.


###### Happy coding!

### Requirements

- [Docker](https://docs.docker.com/engine/installation/) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed


### Running

#### Starting application
```bash
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


## Troubleshooting
Check if port 8080 is open, if not change the port in .env file and docker-compose.yml.

Other problems? Rise an issue!
