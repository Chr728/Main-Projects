import csv
from cs50 import SQL
import sys


def main():
    if len(sys.argv) != 2:
        print("An error ")
        sys.exit(1)

    file = sys.argv[1]

    imp(file)

def imp(file):
    name = []
    house = []
    birth = []

    with open(file) as csvfile:
        fileReader = csv.reader(csvfile)
        next(fileReader)
        for row in fileReader:
            name.append(row[0])
            house.append(row[1])
            birth.append(row[2])

    db = SQL("sqlite:///students.db")

    for i in range(len(name)):
        if len(name[i].split()) > 2:
            db.execute("insert into students (first, middle, last, house, birth) values(?, ?, ?, ?, ?)",
                name[i].split()[0], name[i].split()[1], name[i].split()[2], house[i], birth[i])
        else:
            db.execute("insert into students (first, last, house, birth) values(?, ?, ?, ?)",
                name[i].split()[0], name[i].split()[1], house[i], birth[i])

main()