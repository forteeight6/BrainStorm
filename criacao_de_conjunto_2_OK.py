# Outra forma de criarmos sets em Python é criar um conjunto vazio e inserir elementos nele à medida que desejarmos. Vejamos um exemplo.

# Exemplo de criação de sets.
numeros = [1, 2, 2, 3, 3, 3]
numeros_distintos = set()
for num in numeros:
    numeros_distintos.add(num)
print("Números: ", numeros)
print("Números distintos: ", numeros_distintos)
