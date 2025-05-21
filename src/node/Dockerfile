FROM node:23.11.1-alpine3.21

WORKDIR /app

COPY . /app

RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "node", "main.js" ]