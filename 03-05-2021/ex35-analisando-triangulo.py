a_lado = int(input('Digite o valor do lado A: '))
b_lado = int(input('Digite o valor do lado B: '))
c_lado = int(input('Digite o valor do lado C: '))

print('É um triângulo' if c_lado <= a_lado >= b_lado and c_lado + b_lado >= a_lado or a_lado <= c_lado >= b_lado and a_lado + b_lado >= c_lado or a_lado <= b_lado >= c_lado and a_lado + c_lado >= b_lado else 'Não é um triângulo.')