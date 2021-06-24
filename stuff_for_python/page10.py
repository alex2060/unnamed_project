


f = open("keyvalue.txt", "r")
randomval=f.read()



f = open("email.txt", "r")
email=f.read()

#
f = open("mykeys_1.txt","r")
keys=f.read()

value=keys.split(" ")




myurl="http://alexhaussmann.com/adhaussmann/a_final/add_post_dev.php?uname=MyUserForTest"+randomval+"&hashword=password&tital=tital&text=text&body=body&photo=photo&iframe=ifram&catagoy=cat&catagoy_2=cat2"



import requests


myobj = {'value': 'somevalue'}


x = requests.post(myurl, data = myobj)


reponse=x.text

f = open("postkey_1.txt", "w")
f.write(str(reponse))
f.close()





myurl="http://alexhaussmann.com/adhaussmann/a_final/add_post_dev.php?uname=MyUserForTest"+randomval+"&hashword=password\n&tital=tital&text=text&body=body&photo=photo&iframe=ifram&catagoy=cat&catagoy_2=cat2"














from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import page11


this="we can make a post with \n"+myurl+"\nwe get a key in "+reponse



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

