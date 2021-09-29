# Funções anônimas (funções lambda)

# Para finalizar essa seção, trataremos de um tópico um pouco mais avançado: funções anônimas, funções lambda, ou funções de alta ordem em Python.

# A palavra-chave lambda em Python nos permite criar funções anônimas. Este tipo de função é útil quando desejamos passar uma função simples como argumento para outra função.

# A função map aplica uma função a um conjunto de valores. No exemplo abaixo, mostraremos como aplicar uma outra função (eleva_ao_quadrado) a todos os elementos de uma lista. Retornaremos uma nova lista contendo cada número da lista de entrada elevado ao quadrado.

def eleva_ao_quadrado(n):
    return n ** 2


# Função map sem o uso de função lambda.
print(list(map(eleva_ao_quadrado, range(5))))

# Perceba que a função eleva_ao_quadrado é uma função muito simples, cujo único objetivo é ser passada como parâmetro para a função map. Podemos alcançar o mesmo resultado do código acima de forma mais concisa se usarmos uma função lambda.

# Função map com função lambda.
print(list(map(lambda x: x ** 2, range(5))))

# O conhecimento de como criar funções em Python fará nossos exercícios ficarem muito mais interessantes. A partir deste momento, a maioria deles envolverá a criação de uma função para desempenhar uma tarefa específica. Por mais simples que isso possa parecer, como programador, a maior parte do tempo você estará criando funções, então ter prática nisso ajudará muito.

# Retomando o que aprendemos na seção anterior, podemos criar uma função para calcular o fatorial de um número. O exemplo abaixo mostra uma função que recebe um número como parâmetro e retorna o fatorial desse número.

# Exemplo mais elaborado de função em Python.


def fatorial(n):
    fat = 1
    while n > 1:
        fat *= n
        n -= 1
    return fat


print("O fatorial de {} é {}".format(6, fatorial(6)))
