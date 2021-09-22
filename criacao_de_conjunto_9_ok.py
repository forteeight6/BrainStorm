# Escreva uma função que recebe uma lista de elementos e retorne a quantidade de elementos duplicados na lista.

def num_elementos_duplicados(elementos):
    return len(elementos) - len(set(elementos))


print(num_elementos_duplicados([1, 2, 2, 3, 3, 3, 4, 4, 4, 4, ]))
