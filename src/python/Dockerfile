FROM python:alpine3.9

WORKDIR /app
ARG TIMING
RUN if [[ "$TIMING" == "valgrind" ]]; then apk add valgrind ; fi
RUN pip install --upgrade pip

COPY . /app

RUN pip install -r requirements.txt

ENTRYPOINT [ "sh", "timing.sh","python","main.py" ]