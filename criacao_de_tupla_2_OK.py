# Um uso interessante de tuplas é a troca dos valores de duas variáveis. Essa operação é comumente conhecida como swap. Vejamos um exemplo:

x = 10
y = 20

# Swap errado.
print("x e y antes do swap: ", x, y)

x = y
y = x

print("x e y depois do swap (errado): ", x, y)

# Você consegue identificar o problema no código acima?

# Vejamos agora formas corretas de fazer o swap do conteúdo de duas variáveis.

x = 10
y = 20

# Swap tradicional.

print("x e y antes do swap: ", x, y)

temp = x
x = y
y = temp

print("x e y depois do swap: ", x, y)


x = 10
y = 20

# Swap com tuplas.
print("x e y antes do swap: ", x, y)

x, y = y, x

print("x e y depois do swap: ", x, y)
