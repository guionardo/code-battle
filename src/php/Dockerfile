FROM php:8.4.8RC1-cli-alpine3.21

WORKDIR /app

COPY . /app
RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "php", "main.php" ]