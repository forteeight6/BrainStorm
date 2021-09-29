# Funções em Python

# Até aqui vimos como criar programas simples em Python. Em todos esses programas, salvamos os resultados das computações em variáveis ou então imprimimos os resultados desejados. Entretanto, existem situações nas quais uma dada porção do nosso programa será utilizada múltiplas vezes, em diferentes partes do programa, ou até mesmo por outros programas.

# Imagine, por exemplo, que desejemos criar um programa para exibir a lista dos funcionários de uma empresa, ordenada por ordem alfabética, depois por idade, depois por salário. Nesse caso, temos uma tarefa (ordenar uma lista) que será executada várias vezes (primeiro para ordenar os funcionários por nome, depois por idade, e depois por salário). Em casos como esse, é conveniente que se tenha um procedimento que ordena uma lista de acordo com algum critério. Assim, esse procedimento pode ser aplicado várias vezes sem que tenhamos que repetir o mesmo código em várias partes do programa. Em outras palavras, precisamos de um procedimento que seja reusável em várias partes de nosso programa.

# Uma das principais formas de se criar componentes reusáveis em Python (e em outras linguagens de programação também) são as chamadas funções. Uma função é basicamente um trecho de código (um procedimento, um algoritmo) que pode ser usado várias vezes.

# Apesar de só estarmos falando sobre funções agora, nós já usamos funções várias vezes nas seções anteriores. Por exemplo, quando fazemos x = abs(y) estamos usando a função abs() da biblioteca padrão Python para calcular o valor absoluto de y e armazená-lo em x. Agora aprenderemos a criar e usar nossas próprias funções em Python.

# Funções em Python são definidas por meio da seguinte sintaxe:

"""
def nomedafuncao(parametro1, parametro2, ...):
    corpodafuncao
"""

# Exemplo (bem simples) de função em Python.


def f(n):  # 1
    print("O valor do parâmetro é ", n)  # 2


f(10)  # 3

# 1 - Nesta linha, estamos declarando uma função f que recebe um parâmetro n.
# 2 - O corpo da função consiste de apenas um comando, o print.
# 3 - Nesta linha, estamos invocando(chamando) a função f() passando o número 10 como parâmetro.

# Em vez de imprimir o parâmetro, podemos simplesmente retorná-lo, como abaixo:

# Exemplo de função que retorna um valor.


def f(n):
    return n


resultado = f(10)
print("O valor do parâmetro é {}".format(resultado))

# O comando return retorna um valor. Este valor deve ser salvo em alguma variável para ser usado depois, como fizemos no exemplo acima.

# A função acima ilustra o uso do comando return, mas ela não faz nada muito útil. Porém, não se engane: este recurso é muito útil e muito utilizado. Poderíamos, por exemplo, realizar alguma computação com o parâmetro e retornar o resultado desta computação. Vejamos um exemplo.

# Outro exemplo de função que retorna um valor.


def eleva_ao_quadrado(n):
    return n ** 2


print("O número {} elevado ao quatrado é {}".format(10, eleva_ao_quadrado(10)))

# Funções em Python podem realizar computações tão complicadas quanto desejarmos. Elas são uma ferramenta poderosa de abstração em programação.

# Funções em Python podem retornar mais de um valor:

# Exemplo de função que retorna mais de um valor.


def quociente_resto(x, y):
    quociente = x // y
    resto = x % y
    return (quociente, resto)


print("Quociente e resto: ", quociente_resto(9, 4))

# O exemplo acima, retirado do curso de Python no Edx, mostra um uso interessante de tuplas: o retorno de mais de um valor em uma única chamada de função. Em geral, quando desejamos retornar mais de um valor em uma função, retornarmos uma tupla com os valores desejados. Tenha isso em mente porque essa técnica é bastante usada. E não se preocupe se você não entende o que é uma tupla. Cobriremos este tópico em breve.
