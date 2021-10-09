# A função print concatena strings com um espaço entre elas.
print("Admirável", "Mundo", "Novo")

# A função print converte números para strings.
print(1984, "George Orwell")

# As strings somadas com + são concatenadas sem espaços entre elas.
print("#" + "Programando" + "Em" + "Python")

# Forma mais avançada de formatação de strings
frase = 'Um triângulo de base igual a {0} e altura igual a {1} possui área igual a {2}.'.format(
    3, 4, 12)
print(frase)

# Formatação de strings com f-strings
linguagem = "Python"
f"Programando em {linguagem}"
print(frase)
