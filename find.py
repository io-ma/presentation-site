import argparse, glob, os
from pathlib import Path

def find_file(args):
    path = args.path
    p = Path(path)
    name = args.name
    file_list = list(p.rglob(name))
    files = set()
    for f in file_list:
        files.add(f)
    for f in files:
        print(f)

def get_parser():
    parser = argparse.ArgumentParser(description = "Finds a file in a directory hierarchy.")
    parser.add_argument('path', type=str, help='name of the dir to start the search from')
    parser.add_argument('name', help='Pattern to match')
    args = parser.parse_args()
    find_file(args)


if __name__ == '__main__':
    get_parser()
