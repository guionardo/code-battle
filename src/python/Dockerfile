FROM python:alpine3.9

WORKDIR /app
RUN pip install --upgrade pip

COPY . /app
RUN sh setup_timing.sh

RUN pip install -r requirements.txt

ENTRYPOINT [ "sh", "timing.sh","python","main.py" ]