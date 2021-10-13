from scipy import stats
import numpy

# pip install scipy

# pip install scipy

# Se houver dois números no meio, divida a soma desses números por dois.

# 77, 78, 85, 86, 86, 86, 87, 87, 94, 98, 99, 103

# (86 + 87) / 2 = 86.5

# Exemplo
# Usando o módulo NumPy:


speed = [99, 86, 87, 88, 86, 103, 87, 94, 78, 77, 85, 86]

x = numpy.median(speed)

print(x)

# Modo
# O valor do modo é o valor que aparece o maior número de vezes:

# 99, 86, 87, 88, 111, 86, 103, 87, 94, 78, 77, 85, 86 = 86

# O módulo SciPy possui um método para isso. Aprenda sobre o módulo SciPy em nosso Tutorial SciPy .

# Exemplo
# Use o mode()método SciPy para encontrar o número que aparece mais:


speed = [99, 86, 87, 88, 111, 86, 103, 87, 94, 78, 77, 85, 86]

x = stats.mode(speed)

print(x)

# Resumo do capítulo
# A média, a mediana e o modo são técnicas frequentemente usadas no aprendizado de máquina, por isso é importante entender o conceito por trás delas.
