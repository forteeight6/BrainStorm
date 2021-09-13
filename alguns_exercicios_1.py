# Escreva uma função que recebe como entrada uma lista de números e retorna a quantidade de elementos que aparecem uma única vez na lista.

# Podemos resolver este exercício de várias formas, mas na sugestão de solução abaixo mostramos como converter uma lista em um conjunto (set) para contar os elementos únicos presentes na lista. Por definição, um set em Python não armazena elementos repetidos, então é importante ter essa estrutura de dados em mente ao lidar com problemas que pedem para identificar itens/elementos únicos.

def conta_elementos_unicos(numeros):
    elementos_unicos = set(numeros)
    return len(elementos_unicos)


print(conta_elementos_unicos([1, 1, 2, 3, 3, 4]))
