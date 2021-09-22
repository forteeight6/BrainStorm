# Operações matemáticas com sets(conjuntos)

# Sets em Python podem parecer restritos, mas eles são estruturas de dados incrívelmente úteis e são muito bons naquilo que se propõem a fazer: armazenar elementos distintos.

# Um set em Python é uma representação de um conjunto na matemática. E assim como na matemática, em que temos união, interseção e diferença de conjuntos (além de outras operações), em Python podemos realizar essas mesmas operações em sets de forma muito eficiente.

# Como exemplo, considere a operação de união de conjuntos na matemática. Suponha que tenhamos dois conjuntos A={0,1,3,5,7,9} e B={0,2,4,6,8} e desejamos construir um conjunto C que é a união dos conjuntos A e B. Matematicamente, temos que C=A∪B={0,1,2,3,4,5,6,7,8,9}. Note que o 0 aparece em ambos conjuntos, mas aparece uma única vez no conjunto C.

# Em Python, podemos realizar a operação acima da seguinte forma:

A = {0, 1, 3, 5, 7, 9}
B = {0, 2, 4, 6, 8}
C = A.union(B)
print(C)

# Alternativamente, podemos realizar a operação acima de forma mais concisa, fazendo como mostrado no exemplo abaixo.

A = {0, 1, 3, 5, 7, 9}
B = {0, 2, 4, 6, 8}
C = A | B
print(C)

# Modo alternativo de escrever A.union(B).
