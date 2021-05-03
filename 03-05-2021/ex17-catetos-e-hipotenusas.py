from math import sqrt

oposto = int(input('Qual é o comprimento do cateto oposto? '))
adjacente = int(input('Qual é o comprimentp do cateto adjacente? '))

hipotenusa = sqrt((oposto ** 2) + (adjacente ** 2))

print(f'Hipotenusa: {hipotenusa}')