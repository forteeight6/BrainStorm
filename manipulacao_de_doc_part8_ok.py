# Fechar arquivos
# É uma boa prática sempre fechar o arquivo quando terminar de usá-lo.

# Exemplo
# Feche o arquivo quando terminar:

f = open("teste.txt", "r")
print(f.readline())
f.close()

# Nota: Você deve sempre fechar seus arquivos; em alguns casos, devido ao armazenamento em buffer, as alterações feitas em um arquivo podem não aparecer até que você feche o arquivo.
