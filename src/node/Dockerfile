FROM node:current-alpine

WORKDIR /app

ARG TIMING
RUN if [[ "$TIMING" == "valgrind" ]]; then apk add valgrind ; fi

COPY . /app

ENTRYPOINT [ "sh", "timing.sh", "node", "main.js" ]