


f = open("keyvalue.txt", "r")
randomval=f.read()



f = open("email.txt", "r")
email=f.read()

#
f = open("mykeys_1.txt","r")
keys=f.read()

value=keys.split(" ")




myurl="http://alexhaussmann.com/adhaussmann/a_final/rm.php?n="+value[1]+"&k="+value[2]


import requests


myobj = {'value': 'somevalue'}


x = requests.post(myurl, data = myobj)


reponse=x.text



f = open("myposturl_form_prem.txt", "w")
f.write(str(reponse))
f.close()




f = open("post_url.txt", "w")
f.write(str(myurl))
f.close()






x = requests.post(myurl, data = myobj)


reponse2=x.text




myurl="http://alexhaussmann.com/adhaussmann/a_final/rm.php?\nn="+value[1]+"&\nk="+value[2]






from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import page10


this="we can cash a key with \n"+myurl+"\n\nin reponse you get this tells us its ture and you also get a post id reponse\n we will use it again when we do premium posts\n\n"+reponse+" \n\n if we use it again we get "+reponse2 #"In responce you get \n"+reponse2+this,
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

