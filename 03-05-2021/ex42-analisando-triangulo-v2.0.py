for cont in range(0, 3):
    lado = int(input('Digite um lado: '))

    if cont == 0:
        a = lado
    if cont == 1:
        b = lado
    if cont == 2:
        c = lado

if b <= a >= c and b + c >= a or a <= b >= c and a + c >= b or a <= c >= b and a + b >= c:
    if b == a == c:
        print('É um triângulo EQUILATERO.')
    elif b == a or c == a or c == b:
        print('É um triângulo ISÓSCELES.')
    else:
        print('É um triângulo Escaleno.')
else:
    print('Não é um triângulo.')