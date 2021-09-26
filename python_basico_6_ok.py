# Laços de Repetição

# Laços de Repetição
# Outra capacidade importantíssima de linguagens de programação é a repetição de comandos até que uma dada condição seja satisfeita. As linguagens de programação implementam isso por meio dos chamados laços de repetição.

# Laços for
# Existem vários tipos de laços(loops) em Python. O mais comum deles é o for, que é usado com objetos iteráveis tais como listas e intervalos. Os exemplos abaixo mostram o funcionamento básico do for.

# Percorrendo uma lista de números.
print("Números em uma lista: ")
for numero in [1, 1, 2, 3, 5, 8, 13]:
    print(numero)

# Percorrendo uma lista de palavras.
print("Palavras em uma lista:")
for palavra in ["Ordem", "e", "Progresso"]:
    print(palavra)

# Vejamos agora como percorrer intervalos em Python.

# Percorrendo um intervalo. Por padrão, intervalos começam em zero.
for i in range(3):
    print(i)

# Observação: range(3) não inclui o 3, como mencionamos anteriormente.

# Nos exemplos acima, ao percorrer os elementos de uma sequência, não usamos o índice do elemento (sua posição na sequência). Entretanto, há situações em que esta informação é útil. Python nos permite acessar tanto os índices dos elementos quanto os elementos propriamente ditos se usarmos a função enumerate.

for indice, elemento in enumerate(range(-3, 3)):
    print(indice, elemento)

# Um exemplo interessante de uso de laços for é a busca por um elemento em uma lista:

elemento = 10
estah_presente = False
lista = [1, 2, 7, 10, 15, 20, 50]
for item in lista:
    if item == elemento:
        estah_presente = True

if estah_presente:
    print("Elemento está na lista!")
else:
    print("Elemento não está na lista!")

# Uma outra forma de pesquisar por um elemento em uma lista em Python é por meio do recurso in:

elemento = 10
lista = [1, 2, 7, 10, 15]
if elemento in lista:
    print("Está na lista!")
else:
    print("Não está na lista!")
