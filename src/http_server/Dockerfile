FROM golang:alpine as build

WORKDIR /app

COPY . /app

RUN go build http_server.go

FROM alpine as run

WORKDIR /app
COPY --from=build /app/http_server .
EXPOSE 8090
ENTRYPOINT [ "./http_server" ]

