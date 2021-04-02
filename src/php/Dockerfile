FROM php:cli-alpine

WORKDIR /app

ARG TIMING
RUN if [[ "$TIMING" == "valgrind" ]]; then apk add valgrind ; fi

COPY . /app

ENTRYPOINT [ "sh", "timing.sh", "php", "main.php" ]