FROM python:alpine3.9

WORKDIR /app
RUN pip install --upgrade pip

COPY . /app

RUN pip install -r requirements.txt

ENTRYPOINT [ "python","main.py" ]