# Escreva uma função que recebe como entrada uma lista ordenada de números e retorna o índice do primeiro elemento maior que um elemento limite. Se nenhum elemento da lista for maior que o limite desejado, retorne o valor -1.

def retorna_primeiro_maior(numeros, limite):
    i = 0
    while i < len(numeros):
        if numeros[i] > limite:
            return i
        i += 1
    return -1


print(retorna_primeiro_maior([1, 10, 20, 30, 50, 100], 10))
print(retorna_primeiro_maior([1, 10, 20, 30, 50, 100], 200))
