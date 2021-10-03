# Abra o arquivo "demofile3.txt" e substitua o conteúdo:

f = open("doc.txt", "w")
f.write("Woops! I have deleted the content!")
f.close()

# open and read the file after the appending:
f = open("doc.txt", "r")
print(f.read())

# Nota: o método "w" sobrescreverá todo o arquivo.
