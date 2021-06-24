import random
val = random.randint(0,2**64)

email=input("email")


f = open("email.txt", "w")
f.write(str(email))
f.close()


f = open("keyvalue.txt", "w")
f.write(str(val))
f.close()


#http://alexhaussmann.com/adhaussmann/a_final/add_user_dev.php?uname=gogogo22&hashword=wegonow2&email=alex.haussmann%40gmail.com



from tkinter import *

ws = Tk()
ws.geometry('900x1000')
ws.title('PythonGuides')
ws['bg']='#5d8a82'

f = ("Times bold", 14)

def nextPage():
    ws.destroy()
    import page2





    
Label(
    ws,
    text="Welcome to the unamed system \n this is a system that alows anyone to creat most types of fully functional websights \n Including Subscrtipton online tests and socal midea services. and soon ecomerse websights all for free\n It also includes along with tools to run your buissness",
    padx=20,
    pady=20,
    bg='#5d8a82',
    font=f
).pack(expand=True, fill=BOTH)







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

