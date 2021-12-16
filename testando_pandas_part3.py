import pandas as pd

dados = {
    "Nomes": ["joao", "Maria+", "Pedro"],
    "idade": [52, 27, 22],
    "Nota": [7, 2, 8],
    "Aprovado": ["sim", "nao", "sim"]
}

df = pd.DataFrame(data=dados)
# print(df)
# print(df[df['Nomes'] == 'Maria+'])
# print(df[df['Nomes'].isin(['joao', 'Pedro'])])
# print(df[df['Nomes'].str.len() > 4])
# print(df[df['Nomes'].str.contains('Maria')])
# print(df[df['Nomes'].str.contains('ao|e|a/+')])  # ?

# dados_filtrados = df['idade'] > 25
# print(dados_filtrados)
# print('\n')
# print(df[dados_filtrados])

"""
# Não Funcionou
print(df.loc[[3]])
print(df.loc[[0, 2]])
print(df.loc[[0, 1, 3]])
print(df.loc[0:2])
"""
"""
print(df.loc[df['Nomes'] == 'Pedro'])
print('\n')
print(df.loc[df['Nota'] == 8])
print('\n')
print(df.loc[df['Aprovado'] == 'sim'])
print('\n')
print(df.loc[df['Aprovado'] == 'nao'])
"""
# df.loc[] = Series
# df.loc[[]] = DataFrame
"""
#NÃO FUNCIONOU
df.loc['Nomes']
print('\n')
df.loc[['Nomes']]
print('\n')
df.loc[['Nomes', 'Nota']]
print('\n')
"""
print(df.iloc[[0, 2]])
print('\n')
print(df.iloc[0:3])
print('\n')
print(df.iloc[:3])
print('\n')
print(df.iloc[1:])
print('\n')


print(df.loc['Aprovado':'sim'])
print('\n')
print(df.loc[df['Nota'] > 2])
print('\n')
# df.loc[df['Nota'] > 2 | ]
print(df.loc[(df['Nota'] > 2) & (df['Nota'] < 8)])
print('\n')

df.iloc[0] = 0
print(df.iloc[0])
print('\n')
df.iloc[2] = -df.iloc[2]
print(df.iloc[2])
