# Fechamento a cada 5 minutos
grafico_padrao = [1, 2, 1, 2]
grafico_teste = [1, 2, 1, 2, 4, 8, 16, 32, 1, 2, 1, 2, 1, 2]

padrao = []
count = 1
for item in grafico_teste:
    if item in grafico_padrao:
        padrao.append(item)
        if count == 4:
            print("Padrão encontrado:", padrao)
        count += 1
    else:
        padrao.clear()
        count = 1
