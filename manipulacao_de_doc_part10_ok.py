# Gravar em um arquivo existente
# Para gravar em um arquivo existente, você deve adicionar um parâmetro à open()função:

# "a" - Anexar - irá anexar ao final do arquivo

# "w" - Gravar - sobrescreverá qualquer conteúdo existente

# Exemplo
# Abra o arquivo "demofile2.txt" e anexe o conteúdo ao arquivo:

f = open("doc.txt", "a")
f.write("Now the file has more content!")
f.close()

# open and read the file after the appending:
f = open("doc.txt", "r")
print(f.read())
