FROM golang:alpine as build

WORKDIR /app

COPY . /app

RUN go build main.go
RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh", "/app/main" ]

