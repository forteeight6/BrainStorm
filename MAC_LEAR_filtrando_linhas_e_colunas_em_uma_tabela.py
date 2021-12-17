# fonte: https://www.youtube.com/watch?v=6M0PUNw7faE&ab_channel=Did%C3%A1ticaTech
# Title: Filtrando linhas e colunas em uma tabela (Python para Machine Learning - Aula 14)

import pandas as pd

alunosDIC = {
    "Nome": [
        "Ricardo", "Pedro", "Roberto", "Carlos"
    ],
    "Nota": [
        4, 7, 5.5, 9
    ],
    "Aprovado": [
        "Não", "Sim", "Não", "Sim"
    ]
}

alunosDF = pd.DataFrame(data=alunosDIC)

print(alunosDF, '\n')
print(alunosDF["Nome"], '\n')
print(alunosDF.loc[[0]], '\n')
print(alunosDF.loc[[2]], '\n')
print(alunosDF.loc[[0, 2]], '\n')
print(alunosDF.loc[[0, 1, 3]], '\n')
print(alunosDF.loc[0:2], '\n')
print('\n')
# ----------------------------
print(alunosDF.loc[alunosDF['Nome'] == 'Pedro'], '\n')
print(alunosDF.loc[alunosDF['Nota'] == 9], '\n')
print(alunosDF.loc[alunosDF['Aprovado'] == 'Sim'], '\n')
print(alunosDF.loc[alunosDF['Aprovado'] == 'Não'], '\n')
# ----------------------------
