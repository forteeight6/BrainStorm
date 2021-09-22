paises = {'BRA': 'Brasil', 'EUA': 'Estados Unidos',
          'FRA': 'França', 'ESP': 'Espanha'}

# Pesquisando valores em dicionários
# Dicionários nos permitem pesquisar facilmente por valores quando sabemos a chave correspondente:

print("EUA: ", paises['EUA'])

# Vejamos agora como percorrer pares chave-valor em um dicionário:

for chave, valor in paises.items():
    print(chave + " = " + str(valor))
