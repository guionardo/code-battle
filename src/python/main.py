import os
import random
import time
import requests

random.seed(time.time())

ITERATIONS = int(os.getenv('ITERATIONS', '1000000'))


def generate_random_int():
    return random.randint(0, 1024)


def generate_random_float():
    return random.random()


def request(url):
    ri = str(generate_random_int())
    response = requests.get(f'{url}?q={ri}')
    print(response)


def main():
    print("START")
    url = os.environ.get('HTTP_REQUEST')
    for i in range(ITERATIONS):
        i1 = generate_random_int()
        i2 = generate_random_int()
        f1 = generate_random_float()
        f2 = generate_random_float()
        ints = i1+i2
        floats = f1*f2
        s = "A"*1024
        del(s)
        request(url)

    print("END")


if __name__ == '__main__':
    main()
