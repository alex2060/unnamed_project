
import requests
import webbrowser


f = open("now_we_try.html", "r")
randomval=f.read()



f = open("keyvalue.txt", "r")
randomid=f.read()



randomval=randomval.replace("!!!@@!!!", "example_mygame5")

url = 'http://alexhaussmann.com/adhaussmann/a_final/add_template.php'
myobj = {"uname":"example","hashword":"1qazwsxedCr","template_name":"mygame", 'template': randomval}


x = requests.post(url, data = myobj)




print(x.text)

webbrowser.get("firefox").open("http://alexhaussmann.com/adhaussmann/a_final/make_newpage.php?usertemplate_name=example_mygame&var0=&uname=&hashword=&setion=ee46484825b87151f9b54dc8dd3ebdb73ef5d222b241afa93c0acc48bf2efe9e&setion2=bab6e6a03c7bc9e574fa5e4da3ee3e59db46339a81da9ff0fa2d3bae864c08a6")










f = open("subscribe_V1.html", "r")
randomval=f.read()

#subscribs
url = 'http://alexhaussmann.com/adhaussmann/a_final/add_template.php'
myobj = {"uname":"example","hashword":"1qazwsxedCr","template_name":"subscribs", 'template': randomval}


x = requests.post(url, data = myobj)

print(x.text)

webbrowser.get("firefox").open("http://alexhaussmann.com/adhaussmann/a_final/make_newpage.php?usertemplate_name=example_subscribs&var0=&uname=&hashword=&setion=ee46484825b87151f9b54dc8dd3ebdb73ef5d222b241afa93c0acc48bf2efe9e&setion2=bab6e6a03c7bc9e574fa5e4da3ee3e59db46339a81da9ff0fa2d3bae864c08a6")









f = open("test_vertion.html", "r")
randomval=f.read()

url = 'http://alexhaussmann.com/adhaussmann/a_final/add_template.php'

myobj = {"uname":"example","hashword":"1qazwsxedCr","template_name":"test", 'template': randomval}



x = requests.post(url, data = myobj)

print(x.text)

webbrowser.get("firefox").open("http://alexhaussmann.com/adhaussmann/a_final/make_newpage.php?usertemplate_name=example_test&var0=&uname=&hashword=&setion=ee46484825b87151f9b54dc8dd3ebdb73ef5d222b241afa93c0acc48bf2efe9e&setion2=bab6e6a03c7bc9e574fa5e4da3ee3e59db46339a81da9ff0fa2d3bae864c08a6")



webbrowser.get("firefox").open("http://alexhaussmann.com/adhaussmann/a_final/download.php?cat_name=Alex_app")





















