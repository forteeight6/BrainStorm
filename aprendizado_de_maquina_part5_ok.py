# pip install numpy
# python aprendizado_de_maquina_part5_ok.py

# Aprendizado de máquina - Desvio padrão
# O que é desvio padrão?
# O desvio padrão é um número que descreve a dispersão dos valores.

# Um desvio padrão baixo significa que a maioria dos números está próxima do valor médio (médio).

# Um alto desvio padrão significa que os valores estão espalhados por uma faixa mais ampla.

# Exemplo: Desta vez, registramos a velocidade de 7 carros:

# speed = [86,87,88,86,87,85,86]

# O desvio padrão é:

# 0.9

# O que significa que a maioria dos valores está dentro da faixa de 0,9 do valor médio, que é 86,4.

# Vamos fazer o mesmo com uma seleção de números com um intervalo mais amplo:

# speed = [32,111,138,28,59,77,97]

# O desvio padrão é:

# 37.85

# O que significa que a maioria dos valores está dentro do intervalo de 37,85 do valor médio, que é 77,4.

# Como você pode ver, um desvio padrão mais alto indica que os valores estão espalhados por uma faixa mais ampla.

# O módulo NumPy tem um método para calcular o desvio padrão:

# Exemplo
# Use o std()método NumPy para encontrar o desvio padrão:

import numpy

speed = [86, 87, 88, 86, 87, 85, 86]

x = numpy.std(speed)

print(x)

# Exemplo


speed = [32, 111, 138, 28, 59, 77, 97]

x = numpy.std(speed)

print(x)
