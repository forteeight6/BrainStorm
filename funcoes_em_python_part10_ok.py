# Escreva uma função que recebe como entrada uma lista de números e retorna True se um número passado como parâmetro está presente na lista.

def pesquisa_elemento1(numeros, numero_procurado):
    for numero in numeros:
        if numero == numero_procurado:
            return True
    return False


print(pesquisa_elemento1([1, 10, 20, 30, 50, 100], 30))

# A função acima nada mais é que uma pesquisa linear na lista de entrada. Em outras palavras, percorremos a lista linearmente, elemento por elemento, e verificamos se cada o elemento corrente é o que estamos procurando. Caso seja, retornamos True. Caso o laço for termine e o elemento não tenha sido encontrado, retornamos False, pois percorremos toda a lista e não encontramos o elemento procurado.

# Na função acima, escolhemos percorrer a lista usando um for que percorre cada elemento da lista. Poderíamos também tê-la escrito usando um for que percorre cada índice da lista, como abaixo:


def pesquisa_elemento2(numeros, numero_procurado):
    for indice in range(len(numeros)):
        if numeros[indice] == numero_procurado:
            return True
    return False


print(pesquisa_elemento2([1, 10, 20, 30, 50, 100], 30))

# Como mencionamos acima, a função pesquisa_elemento1 nada mais é que uma pesquisa linear na lista de números de entrada. Como esse tipo de pesquisa é usada muito frequentemente, Python disponibiliza um mecanismo built-in (embutido na linguagem) para realizar esse tipo de pesquisa. Vejamos um exemplo:


def pesquisa_elemento3(numeros, numero_procurado):
    return numero_procurado in numeros


print(pesquisa_elemento3([1, 10, 20, 30, 50, 100], 30))

# Note que o código acima usa o in para verificar se o número procurado está na lista de números recebida como entrada. Neste momento, você pode estar se perguntando qual é a diferença do in usado aqui para o in usado no for na função pesquisa_elemento1. Ocorre que, quando o in é usado juntamente com um for, como na função pesquisa_elemento1, ele é usado para percorrer uma lista de elementos um a um.

# Mas, como vimos na função pesquisa_elemento3, o operador in também pode ser usado para checar se um elemento está em uma lista (ou em outra estrutura de dados).

# É importante fazer essa distinção de uso do in, principalmente porque, como você verá por você mesmo, ele é muito usado no dia a dia.
