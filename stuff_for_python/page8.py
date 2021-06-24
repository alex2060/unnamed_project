


f = open("keyvalue.txt", "r")
randomval=f.read()



f = open("email.txt", "r")
email=f.read()


myurl="http://alexhaussmann.com/adhaussmann/a_final/add_key_dev.php?uname=MyUserForTest"+randomval+"_testledure&password=password&email="+email

myurl1=myurl
import requests


myobj = {'value': 'somevalue'}


x = requests.post(myurl, data = myobj)


reponse=x.text






myurl="http://alexhaussmann.com/adhaussmann/a_final/add_key_dev.php?uname=MyUserForTest"+randomval+"_testledure&password=password&email="+"alexhaussmann@gmail.com"


f = open("go_url.txt", "w")
f.write(str(myurl1))
f.close()


myobj = {'value': 'somevalue'}

x = requests.post(myurl, data = myobj)


reponse2=x.text



f = open("mykeys_1.txt", "w")
f.write(str(reponse2))
f.close()










from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import page9

this=" \n\n\n this is the name and solution hash respectfuly \n you will get an email soner or latter showing with a link to this ledure you can fallow along and see whats happening with it"

Label(
    ws,
    text="in reponse you get \n\n"+reponse2+this,#"In responce you get \n"+reponse2+this,
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

