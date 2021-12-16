# https://www.youtube.com/watch?v=-1EM45iFe_8&ab_channel=ProgramePython
# title: Python PANDAS - A melhor forma de filtrar dados string

import pandas as pd

data = {
    "col1": [
        "ola", "ao", "aula", "filtros"
    ],
    "col2": [
        "bem", "programe", "de", "pandas"
    ],
    "col3": [
        "vindos", "python+", "hoje", "python"
    ]
}

df = pd.DataFrame(data=data)

print(df, '\n')
print(df[df['col1'] == 'ola'], '\n')
print(df[df['col3'].isin(['python'])], '\n')
print(df[df['col3'].isin(['python', 'python+'])], '\n')

tamanho = df[df['col3'].str.len() > 4]
print(tamanho, '\n')

print(df[df['col3'].str.contains('python')], '\n')

print(df[df['col3'].str.contains('on')], '\n')

print(df[df['col3'].str.contains('os|e|\+')], '\n')
