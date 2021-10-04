# Método strftime ()
# O datetimeobjeto tem um método para formatar objetos de data em strings legíveis.

# O método é chamado strftime()e tem um parâmetro format,, para especificar o formato da string retornada:

# Exemplo
# Mostra o nome do mês:

import datetime

x = datetime.datetime(2018, 6, 1)

print(x.strftime("%B"))
