from scipy import stats
import numpy

# pip install scipy

# Mediana
# O valor mediano é o valor do meio, depois de você ter classificado todos os valores:

# 77, 78, 85, 86, 86, 86, 87, 87, 88, 94, 99, 103, 111

# É importante que os números sejam classificados antes de encontrar a mediana.

# O módulo NumPy tem um método para isso:

# Exemplo
# Use o median()método NumPy para encontrar o valor médio:


speed = [99, 86, 87, 88, 111, 86, 103, 87, 94, 78, 77, 85, 86]

x = numpy.median(speed)

print(x)
