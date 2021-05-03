a_nota = int(input('Digite a nota de um aluno: '))
b_nota = int(input('Digite a nota de outro aluno: '))

media = (a_nota + b_nota) / 2

if media < 5:
    print('REPROVADO COM A NOTA: {}.'.format(media))
elif 5 <= media < 6.9:
    print('RECUPERAÇÃO COM A NOTA: {}.'.format(media))
else:
    print('APROVADO COM A NOTA: {}.'.format(media))