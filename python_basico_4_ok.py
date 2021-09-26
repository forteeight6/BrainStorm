# Variáveis booleanas
# Outro nome que representa algo bem simples (mas que costuma assustar as pessoas) é o nome variáveis booleanas. Essas variáveis nada mais são do que uma forma de se armazenar um valor lógico, ou seja, verdadeiro ou falso, que, em Python, são representados como True e False, respectivamente.

# No exemplo abaixo, criamos uma variável booleana e imprimimos o tipo dessa variável.

# Variáveis booleanas (verdadeiro/falso)
a = True
print(type(a))

# Vejamos mais alguns exemplos do uso de operações lógicas (booleanas):

# Exemplos de operações lógicas

# Exemplo de comparação de inteiros.
# Neste exemplo, 'a' é uma variável booleana,
# pois armazena o resultado de uma operação lógica.
a = 4 > 0
print(a)

# Strings são comparadas lexicograficamente, ou seja,
# em ordem alfabética, letra por letra.
b = "abacate" > "banana"
print(b)

# Expressões lógicas podem envolver muitas variáveis.
# Elas podem também ser combinadas para produzir
# expressões mais complexas.
x = y = 7
print(x <= y and y <= x)

# Neste exemplo, a variável a armazena o resultado da comparação 4 > 0. Uma outra forma de se interpretar a expressão a = 4 > 0 é o seguinte: se 4 for maior que 0, armazene o valor True na variável a. Caso contrário, armazene o valor False nessa variável. No nosso exemplo, como 4 é de fato maior que 0 (ou seja, o resultado da comparação é um valor lógico verdadeiro), a variável a recebe o valor True.

# Como a letra a vem antes de b no alfabeto, a palavra "abacate" é menor que "banana", portanto a variável b recebe o valor False. Neste tipo de comparação, caso a primeira letra das palavras seja igual, a segunda letra das palavras é comparada, e assim por diante.

# Como x e y são iguais, a comparação ⇐ é verdadeira nos dois casos, o que faz com que a expressão como um todo seja verdadeira.
