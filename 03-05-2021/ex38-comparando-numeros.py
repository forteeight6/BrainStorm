a_number = int(input('Digite um numero inteiro: '))
b_number = int(input('Digite um numero inteiro: '))

maior = a_number

if b_number < maior:
    print(f'Menor: {b_number}')
    print(f'Maior: {maior}')
elif b_number > maior:
    maior = b_number
    print(f'Menor: {a_number}')
    print(f'Maior: {maior}')
else:
    print('São iguais')

