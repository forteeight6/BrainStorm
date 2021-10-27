# ERREI POIS TEM QUE IMPORTAR O RADIANS

from math import cos, sin, tan, radians

angulo = int(input('Digite um Angulo:'))

cosseno = cos(radians(angulo))
seno = sin(radians(angulo))
tangente = tan(radians(angulo))

print(f'O cosseno do angulo é {cosseno}.')
print(f'O seno do angulo é {seno}.')
print(f'A tangente do angulo é {tangente}.')
