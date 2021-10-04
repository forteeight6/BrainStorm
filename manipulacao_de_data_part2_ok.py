# Saída de data
# Quando executamos o código do exemplo acima, o resultado será:

# 2021-09-18 14:31:18.584707

# A data contém ano, mês, dia, hora, minuto, segundo e microssegundo.

# O datetimemódulo possui muitos métodos para retornar informações sobre o objeto de data.

# Aqui estão alguns exemplos, você aprenderá mais sobre eles posteriormente neste capítulo:

# Exemplo
# Retorne o ano e o nome do dia da semana:

import datetime

x = datetime.datetime.now()

print(x.year)
print(x.strftime("%A"))
