# Leia apenas partes do arquivo
# Por padrão, o read()método retorna o texto inteiro, mas você também pode especificar quantos caracteres deseja retornar:

# Exemplo
# Retorne os 5 primeiros caracteres do arquivo:

f = open("teste.txt", "r")
print(f.read(5))
