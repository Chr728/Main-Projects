import sys
from cs50 import SQL

def main():
    if len(sys.argv) != 2:
        print("An error")
        sys.exit(1)


    students = []
    db = SQL("sqlite:///students.db")


    students = db.execute("select first, middle, last, birth from students where house = (?) ORDER BY last, first",
        sys.argv[1])

    for i in range(len(students)):
        if students[i]["middle"] == None:
            print(f"{students[i]['first']} {students[i]['last']}, born {students[i]['birth']}")
        else:
            print(f"{students[i]['first']} {students[i]['middle']} {students[i]['last']}, born {students[i]['birth']}")

main()