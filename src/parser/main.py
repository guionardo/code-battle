import csv
import glob
import os
from typing import List


from time_parser import TimeParser
from massive_parser import MassiveParser


def get_files(path) -> List[str]:
    files = glob.glob(os.path.join(path, 'time.*'))
    return files


def get_massive_files(path) -> List[str]:
    files = glob.glob(os.path.join(path, 'valgrind.*'))
    return files


def main():
    path = os.getenv('REPORTS', 'reports')
    files = get_files(path)
    parseds = [TimeParser(file) for file in files]
    with open(os.path.join(path, 'times.csv'), 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=TimeParser.__all__)
        writer.writeheader()
        writer.writerows([parsed.__dict__ for parsed in parseds])

    parseds = [MassiveParser(file) for file in get_massive_files(path)]
    with open(os.path.join(path, 'massive.csv'), 'w', newline='') as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=MassiveParser.__all__)
        writer.writeheader()
        writer.writerows([parsed.__dict__ for parsed in parseds])


if __name__ == '__main__':
    main()
