from sys import argv, exit
import sys
import csv

if len(argv) != 3:
    print("Usage: python dna.py data.csv sequence.txt")
    exit(1)

with open(argv[1]) as csv_file:
    csv_data = csv_file.readlines()

patterns = {}
names = {}
counter = 0
while counter < len(csv_data):
    tmp = csv_data[counter].strip().split(',')
    if counter == 0:
        subcounter = 1
        while subcounter < len(tmp):
            patterns.update({tmp[subcounter]: 0})
            subcounter += 1
    counter += 1

with open(argv[2]) as txt_file:
    txt_data = txt_file.readline()

for key in patterns.keys():
    counter = 0
    while counter < len(txt_data):
        str_tmp = txt_data[counter: counter + len(key)]
        tmp_count = 0
        if str_tmp == key:
            tmp_count += 1
            subcounter = counter + len(key)
            while subcounter < len(txt_data):
                str_tmp = txt_data[subcounter: subcounter + len(key)]
                if str_tmp == key:
                    tmp_count += 1
                    subcounter += len(key)
                else:
                    if tmp_count > patterns[key]:
                        patterns.update({key: tmp_count})
                    break
        counter += 1

list_keys = list(patterns.keys())

counter = 1
while counter < len(csv_data):
    tmp = csv_data[counter].strip().split(',')
    subcounter = 0
    flag = 1
    while subcounter < len(list_keys):
        if patterns[list_keys[subcounter]] != int(tmp[subcounter + 1]):
            flag = 0
            break
        subcounter += 1
    if flag == 1:
        print(tmp[0])
        exit(1)
    counter += 1

print("No match")