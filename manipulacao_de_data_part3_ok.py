# Criação de objetos de data
# Para criar uma data, podemos usar a datetime()classe (construtor) do datetimemódulo.

# A datetime()classe requer três parâmetros para criar uma data: ano, mês, dia.

# Exemplo
# Crie um objeto de data:

import datetime

x = datetime.datetime(2020, 5, 17)

print(x)

# A datetime()classe também aceita parâmetros de hora e fuso horário (hora, minuto, segundo, microssegundo, tzone), mas eles são opcionais e têm um valor padrão de 0, ( Nonepara fuso horário).
