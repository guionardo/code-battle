FROM golang:alpine as build

WORKDIR /app

ARG TIMING
RUN if [[ "$TIMING" == "valgrind" ]]; then apk add valgrind ; fi

COPY . /app

RUN go build main.go

ENTRYPOINT [ "sh", "timing.sh", "/app/main" ]

