from random import shuffle

x = 0
lista_de_alunos = []
while x < 4:
    aluno = str(input('Qual é o nome do aluno? '))
    lista_de_alunos.append(aluno)
    x += 1

shuffle(lista_de_alunos)

for aluno in lista_de_alunos:
    print(f"{aluno}")
