# Delete a File
import os
os.remove("teste.txt")

# Check if File exist
if os.path.exists("teste.txt"):
    os.remove("teste.txt")
else:
    print("The file does not exist")

# Delete Folder
os.rmdir("myfolder")
