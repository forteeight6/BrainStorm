# fonte: https://www.youtube.com/watch?v=o6QbApAoz0U&ab_channel=Eletr%C3%B4nicaePrograma%C3%A7%C3%A3o
# tilte: Python Pandas #5- Filtrar dados de uma tabela do excel
import pandas as pd

dados = {
    "nome": [
        "Joao",
        "Maria",
        "Ana",
        "Pedro",
        "Andre",
        "Flavio",
        "Fernanda",
        "Claudio",
        "Marcia"
    ],
    "Idade": [
        23, 45, 12, 40, 19, 25, 37, 25, 42
    ],
    "Altura": [
        1.75, 1.7, 1.63, 1.72, 1.81, 1.83, 1.7, 1.77, 1.67
    ]
}

df = pd.DataFrame(data=dados)
print(df["Idade"] > 20, '\n')
print(df[df["Idade"] > 20], '\n')
print(df[df["Idade"] == 19], '\n')
