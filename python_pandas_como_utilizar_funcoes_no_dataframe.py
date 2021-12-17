# Python PANDAS - Como utilizar FUNÇÕES no dataframe
# https://www.youtube.com/watch?v=_UkoPerfSqU&list=PLEdfCNsWt0gxURVswsV_STMrCo_n7rD5M&index=38&ab_channel=ProgramePython
import numpy as np
import pandas as pd

data = {
    "QT_VOTOS_LEGENDA": [
        5, 70, 144, 7, 0, 455, 640, 5, 7, 0
    ]
}

df = pd.DataFrame(data=data)

print(np.square(2), '\n')
print(df['QT_VOTOS_LEGENDA'].apply(np.square), '\n')


def quadrado(x: int) -> int:
    return x ** 2


print(df['QT_VOTOS_LEGENDA'].apply(quadrado), '\n')

# print(df['QT_VOTOS_LEGENDA'].apply(lambda x: x**2), '\n')
# padrao: convert_dtype = True

# padrao: convert_dtype = False(object format)
print(df['QT_VOTOS_LEGENDA'].apply(lambda x: x**2, convert_dtype=False), '\n')


def soma(*args):
    return sum(args)


print(df['QT_VOTOS_LEGENDA'].apply(soma, args=(1, 2, 3)), '\n')

data2 = {
    "col1": [
        1, 3, 5
    ],
    "col2": [
        2, 4, 6
    ],
    "col3": [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]
}

df2 = pd.DataFrame(data=data2)
mod = df2['col3'].apply(lambda item: [x**2 if x == 2 else x for x in item])
print(mod, '\n')

df2 = df2.drop('col3', axis=1)
print(df2, '\n')

padrao = df2.apply(np.square, raw=False)

# formato array, é mais rapido
array = df2.apply(np.square, raw=True)

print(padrao, '\n')
print(array, '\n')

# axis=1 permite indicar a variavel com a coluna{ x.col1 > x.col2 }, por padrão o axis é igual a 0.
axi = df2.apply(lambda x: 'col1' if x.col1 > x.col2 else 'col2', axis=1)
print(axi, '\n')

data3 = {
    "col1": [
        1, 3, 5
    ],
    "col2": [
        2, 4, 6
    ],
    "col3": [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]
}

df3 = pd.DataFrame(data=data3)

# result_type=None <-padrao, pode receber expand, broadcast e o reduce.
axi = df3.apply(lambda x: 'col1' if x.col1 > x.col2 else 'col2',
                axis=1, result_type='broadcast')
print(axi, '\n')

axi = df3.apply(lambda x: x.col3,
                axis=1, result_type='expand')
print(axi, '\n')
