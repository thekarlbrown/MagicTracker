import json
from pprint import pprint

with open('AllSets.json','r', encoding='utf-8') as data_file:
    data = json.load(data_file)

for set in data:
    print ("-- " + data[set]["name"] + " --")
    for card in data[set]["cards"]:
        multiverseid = card.get("multiverseid")
        if multiverseid is None:
            multiverseid=0;
        print (card["name"] + " " + str(multiverseid))