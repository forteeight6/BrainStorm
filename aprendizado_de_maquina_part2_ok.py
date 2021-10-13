from scipy import stats
import numpy

# pip install scipy

# Aprendizado de máquina - modo médio médio

# Média, mediana e modo
# O que podemos aprender olhando para um grupo de números?

# No aprendizado de máquina (e na matemática), muitas vezes existem três valores que nos interessam:

# Média - o valor médio
# Mediana - o valor do ponto médio
# Modo - o valor mais comum
# Exemplo: Registramos a velocidade de 13 carros:

# speed = [99,86,87,88,111,86,103,87,94,78,77,85,86]

# Qual é a média, o meio ou o valor de velocidade mais comum?

# Quer dizer
# O valor médio é o valor médio.

# Para calcular a média, encontre a soma de todos os valores e divida a soma pelo número de valores:

# (99+86+87+88+111+86+103+87+94+78+77+85+86) / 13 = 89.77

# O módulo NumPy possui um método para isso. Aprenda sobre o módulo NumPy em nosso tutorial NumPy .

# Exemplo
# Use o mean()método NumPy para encontrar a velocidade média:


speed = [99, 86, 87, 88, 111, 86, 103, 87, 94, 78, 77, 85, 86]

x = numpy.mean(speed)

print(x)
