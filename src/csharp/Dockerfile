FROM mcr.microsoft.com/dotnet/sdk:5.0-alpine as build

WORKDIR /app

COPY . .
RUN dotnet publish csharp.csproj -c Release -o out
COPY setup_timing.sh ./out/
COPY timing.sh ./out/

FROM mcr.microsoft.com/dotnet/aspnet:5.0-alpine as runtime

WORKDIR /app

COPY --from=build /app/out .
RUN sh setup_timing.sh

ENTRYPOINT [ "sh", "timing.sh","dotnet", "csharp.dll" ]