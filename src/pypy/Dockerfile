FROM jamiehewland/alpine-pypy:alpine3.11

WORKDIR /app

RUN pypy3 -m ensurepip
RUN pypy3 -m pip install --upgrade pip

COPY . /app
RUN sh setup_timing.sh

RUN pypy3 -m pip install -r requirements.txt

ENTRYPOINT [ "sh", "timing.sh","pypy3","main.py" ]