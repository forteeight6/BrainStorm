from datetime import datetime

data_e_hora_em_texto = "01/03/2018 12:30"
data_e_hora = datetime.strptime(data_e_hora_em_texto, "%d/%m/%Y %H:%M")

print(data_e_hora)
