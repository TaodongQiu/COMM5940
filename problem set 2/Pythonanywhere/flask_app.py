from flask import Flask, render_template, json, request
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/index")
def main():
   user = {"name":"Taodong"}
   return render_template("index2.html",user=user,title="Home Page")

@app.route("/table")
def table():
    r = requests.get('https://api.airtable.com/v0/appyBGQopgOnPBdoA/Imported%20table?api_key=key0WrAysAprBhXUB')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            dataset.append(dict)

    return render_template('table.html', entries=dataset)


if __name__ == '__main__':
   app.run(debug = True)