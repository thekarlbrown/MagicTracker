import json
import codecs
from pprint import pprint

with open('AllSets.json','r', encoding='utf-8') as data_file:
    data = json.load(data_file)

shortenedJSON = "["
autocompleteJSON = "["
for set in data:
    print ("-- " + data[set]["name"] + " --") 
    shortenedJSON += "{\"name\": \"" + data[set]["name"] + "\", \"cards\": ["
    for card in data[set]["cards"]:
        multiverseid = card.get("multiverseid")
        if multiverseid is None:
            multiverseid=0;
        print (card["name"] + " " + str(multiverseid))
        autocompleteJSON += "{\"set\": \"" + data[set]["name"] + "\", \"multiverseid\": " + str(multiverseid) + ", \"name\": \"" + card["name"] + "\"},"
        shortenedJSON += "{\"multiverseid\": " + str(multiverseid) + ", \"name\": \"" + card["name"] + "\"},"
    shortenedJSON = shortenedJSON[:-1]
    shortenedJSON += "]},"
autocompleteJSON = autocompleteJSON[:-1]
autocompleteJSON += "]"
shortenedJSON = shortenedJSON[:-1]
shortenedJSON += "]"
with codecs.open("AllSets-short.json",'w','utf-8') as output_file:
    output_file.write(shortenedJSON)
    output_file.close
with codecs.open("AllSets-autocomplete.json",'w','utf-8') as output_file:
    output_file.write(autocompleteJSON)
    output_file.close