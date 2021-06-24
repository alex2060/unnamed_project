


f = open("keyvalue.txt", "r")
randomval=f.read()




f = open("myposturl_form_prem.txt", "r")
postkeys=f.read()
postkeys=postkeys.strip("\n")
postkeys=postkeys.split(" ")


#

f = open("prem_postkey_1.txt","r")
mykey=f.read()

mykey=mykey.strip("\n")




myurl="http://alexhaussmann.com/adhaussmann/a_final/get_post_dev.php?\nkey="+mykey+"&type=all\n&usekkey="+postkeys[2]+"&filler="



import requests


myobj = {'value': 'somevalue'}


x = requests.post(myurl, data = myobj)


reponse=x.text



















from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import post_example


this="we can make a post premium post url with \n"+myurl+" \n note the cat2 this is how we make the premium post \nwe get a key in the next page we will generate an html page \n"+reponse



Label(
    ws,
    text=this,
    padx=20,
    pady=20,
    bg='#5d8a82',
    font=f
).pack(expand=True, fill=BOTH)


import random
val = random.getrandbits(128)


#Label(ws, text = 'Position image on button', font =('<font_name>', 20)).pack(side = TOP, padx  = 10, pady = 20)


#photo = PhotoImage(file = "val.png")


#photoimage = photo.subsample(1, 1)

# Position image on button

Button(
    ws, 
    text="Next Page", 
    font=f,
    command=nextPage,
        padx=10,
    pady=10,
    ).pack(side = TOP, padx  = 10, pady = 20)

#Label(ws, image = photoimage,).pack()

ws.mainloop()

