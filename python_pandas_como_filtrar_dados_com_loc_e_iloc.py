# Python PANDAS - Como filtrar dados com LOC e ILOC
# fonte: https://www.youtube.com/watch?v=5BJtFsCbICM&ab_channel=ProgramePython

import pandas as pd

dados = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [10, 11, 12]
]

df = pd.DataFrame(dados,
                  index=[
                      'lin1', 'lin2', 'lin3', 'lin4'
                  ],
                  columns=[
                      'col1', 'col2', 'col3'
                  ]
                  )

print(df.loc['lin1'], '\n')
print(df.loc[['lin1']], '\n')
print(df.loc[['lin1', 'lin3']], '\n')
print(df.iloc[[0, 2]], '\n')
print(df.iloc[0:3], '\n')
print(df.loc['lin1':'lin3'], '\n')

print(df.loc[df['col1'] > 2], '\n')
print(df.loc[(df['col1'] > 2) | (df['col1'] < 5)], '\n')
print(df.loc[(df['col1'] > 2) & (df['col1'] < 5)], '\n')

df.iloc[0] = 0
print(df, '\n')

df.iloc[2] = -df.iloc[2]
print(df, '\n')
