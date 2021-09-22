# Escreva uma função que recebe uma lista de elementos e retorne a quantidade de elementos únicos (distintos) na lista.

def num_elementos_distintos(elementos):
    return len(set(elementos))


print(num_elementos_distintos([1, 2, 2, 3, 3, 3, 4, 4, 4, 4]))
