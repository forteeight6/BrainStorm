# Criando uma lista dentro de um for.
frutas = ['laranja', 'banana', 'abacate', 'manga']

plurais_frutas = []

for fruta in frutas:
    plural = fruta + 's'
    plurais_frutas += [plural]
print(plurais_frutas)

# Outros métodos do list
help(list)
