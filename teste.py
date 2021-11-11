arquivo = open('teste.txt', 'a')
arquivo.write('1')
arquivo.close()

arquivo = open('teste.txt', 'r')
# print(arquivo.read())
data = int(arquivo.read().replace('\n', ''))
print(data)
