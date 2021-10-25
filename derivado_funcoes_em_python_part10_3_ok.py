def pesquisa_elemento3(numeros, numero_procurado):
    return numero_procurado in numeros


print(pesquisa_elemento3([1, 10, 20, 30, 50, 100], 30))

# Note que o código acima usa o in para verificar se o número procurado está na lista de números recebida como entrada. Neste momento, você pode estar se perguntando qual é a diferença do in usado aqui para o in usado no for na função pesquisa_elemento1. Ocorre que, quando o in é usado juntamente com um for, como na função pesquisa_elemento1, ele é usado para percorrer uma lista de elementos um a um.

# Mas, como vimos na função pesquisa_elemento3, o operador in também pode ser usado para checar se um elemento está em uma lista (ou em outra estrutura de dados).

# É importante fazer essa distinção de uso do in, principalmente porque, como você verá por você mesmo, ele é muito usado no dia a dia.
