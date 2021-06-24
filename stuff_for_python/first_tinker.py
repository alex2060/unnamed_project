
import tkinter
from tkinter import *
from PIL import Image, ImageTk

root = Tk()

# Position text in frame
Label(root, text = 'Position image on button', font =('<font_name>', 20)).pack(side = TOP, padx  = 10, pady = 20)

# Create a photoimage object of the image in the path
photo = PhotoImage(file = "val.png")

# Resize image to fit on button
photoimage = photo.subsample(1, 2)

# Position image on button
Button(root, image = photoimage,).pack(side = BOTTOM, pady = 10)
mainloop()


