FROM php:8.5.0RC2-cli-alpine3.22

WORKDIR /app

COPY . /app
RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "php", "main.php" ]