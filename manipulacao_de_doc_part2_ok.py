# Para abrir o arquivo, use a open()função interna.

# A open()função retorna um objeto de arquivo, que tem um read()método para ler o conteúdo do arquivo:

# Exemplo

f = open("teste.txt", "r")
print(f.read())
