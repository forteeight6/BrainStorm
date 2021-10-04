"""
Criar um novo arquivo
Para criar um novo arquivo em Python, use o open()método, com um dos seguintes parâmetros:

"x" - Criar - criará um arquivo, retornará um erro se o arquivo existir

"a" - Anexar - criará um arquivo se o arquivo especificado não existir

"w" - Gravar - criará um arquivo se o arquivo especificado não existir
"""
# Exemplo
# Crie um arquivo chamado "myfile.txt":

f = open("myfile.txt", "x")

# Resultado: um novo arquivo vazio é criado!

# Exemplo
# Crie um novo arquivo se ele não existir:

f = open("myfile.txt", "w")
