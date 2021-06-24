
f = open("keyvalue.txt", "r")
randomval=f.read()



f = open("email.txt", "r")
email=f.read()


myurl="http://alexhaussmann.com/adhaussmann/a_final/add_ledger_dev.php?uname=MyUserForTest"+randomval+"&\nhashword=password&Ledgure=ledding&password=leddingpassword&email="+email







from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import page6

Label(
    ws,
    text="Next lets make Ledgure with this url \n"+myurl,
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

