# title: Python PANDAS - Como filtrar colunas
# fonte: https://www.youtube.com/watch?v=Xci0JKun-n8&ab_channel=ProgramePython

import pandas as pd

data = {
    "col1": [
        6, 15, 1, 19, 20, 18, 8, 1, 9
    ],
    "col2": [
        15, 14, 14, 16, 3, 7, 10, 3, 11
    ],
    "col3": [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'
    ]
}

df = pd.DataFrame(data=data)
print(df.loc[:, :], '\n')
print(df.loc[:, 'col1'], '\n')
print(df.loc[:, 'col2':'col3'], '\n')

print(df.iloc[:, 0], '\n')
print(df.iloc[:, 0:2], '\n')
print(df.iloc[:, 1:], '\n')
print(df.iloc[:, ::-1], '\n')
print(df.iloc[:, -1], '\n')
