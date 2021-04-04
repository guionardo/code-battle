FROM node:current-alpine

WORKDIR /app

COPY . /app

RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "node", "main.js" ]