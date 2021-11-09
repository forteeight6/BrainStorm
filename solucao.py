from random import choice, shuffle

# Insira uma lista de nomes, e a quantidade que deseja selecionar


def selection(lista, quantidade):
    escolhido = []

    for index in range(quantidade):
        shuffle(lista)
        escolhido.append(choice(lista))

    return escolhido
    # print(escolhido)


# selection(['a', 'b', 'c'], 2)

alunos = []
index = 0
print('Insira X para finalizar o processo: \n')
while True:
    alunos.append(str(input('Qual o nome do alunos? ')))
    if alunos[index].lower() == 'x':
        break
    index += 1

for aluno in selection(alunos, 2):
    print(f'{aluno}')
