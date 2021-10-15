# pip install numpy
# python aprendizado_de_maquina_part7_ok.py

import numpy

# Desvio padrão
# Como aprendemos, a fórmula para encontrar o desvio padrão é a raiz quadrada da variância:

# √1432.25 = 37.85
# Ou, como no exemplo anterior, use o NumPy para calcular o desvio padrão:

# Exemplo

# Use o std()método NumPy para encontrar o desvio padrão:


speed = [32, 111, 138, 28, 59, 77, 97]

x = numpy.std(speed)

print(x)

# Símbolos
# O Desvio Padrão é frequentemente representado pelo símbolo Sigma: σ

# A variância é frequentemente representada pelo símbolo Sigma Square: σ 2

# Resumo do capítulo
# O desvio padrão e a variação são termos frequentemente usados ​​no aprendizado de máquina, portanto, é importante entender como obtê-los e o conceito por trás deles.
