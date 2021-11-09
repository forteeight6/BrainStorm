from random import shuffle
alunos = []
indice = 0
count = 1
print('Aperte X para parar.\n')
while True:
    alunos.append(str(input('Digite o nome do aluno: ')))
    if alunos[indice] == 'x':
        break
    print(alunos[indice])
    indice += count

shuffle(alunos)
ordem = 0
for aluno in alunos:
    print(f'{ordem}º {aluno}')
    ordem += 1
