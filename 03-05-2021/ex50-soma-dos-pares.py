soma = 0
for cont in range(0, 6):
    number = int(input('Digite um numero inteiro: '))
    if number % 2 == 0:
        soma += number
print(f'A soma dos numeros pares é igual a {soma}')