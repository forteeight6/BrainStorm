from random import sample

a_aluno = str(input('Digite o nome de um aluno: '))
b_aluno = str(input('Digite o nome de outro aluno: '))
c_aluno = str(input('Digite o nome de um outro aluno: '))
d_aluno = str(input('Digite o nome de um quarto aluno: '))

lista = [a_aluno, b_aluno, c_aluno, d_aluno]

reorganizar = sample(lista, 4)

print(f'{reorganizar}')