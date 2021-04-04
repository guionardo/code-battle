FROM php:cli-alpine

WORKDIR /app

COPY . /app
RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "php", "main.php" ]