# title: Python PANDAS - Qual função escolher para aplicar funções?
# fonte: https://www.youtube.com/watch?v=Z_FCXZgyAF4&list=PLEdfCNsWt0gxURVswsV_STMrCo_n7rD5M&index=40&ab_channel=ProgramePython

# .apply é aplicado num DataFrame ou em uma Série e recebe sempre uma função com seu(s) argumento(s), passando a função pelas linhas ou colunas, CASO esteja passando num dataframe ira passar a função nele todo.
# .map só é aplicado em séries, e recebe alem de funções, dicionarios e séries.

# .transform ele pode ser passado em dataframes quanto para séries e ele tb tem um axis igual la no apply, a diferença é que o transforme ira receber cada coluna separadamente para aplicar a função, enquanto o apply recebe tudo junto e outra grande diferença é que o retorno dessa função deve ser necessariamente uma sequencia do mesmo tamanho que ele recebeu, enquanto o apply consegue ser mais versatil.

# applymap é muito parecido com o map a grande diferença é que é só passado para Dataframes e nao existe para serie, ele é muito otimizado para desempenho principalmente se a gente tiver transformações que podem ser vetorizadas.

# compare o tempo levado para a aplicação de funções, testando cada função de aplicação de funções dica use o i = time.time() f = time.time() r =  f - i
import pandas as pd
import numpy as np


data2 = {
    "QT_VOTOS_LEGENDA": [
        10, 20, 30, 40
    ],
    "NR_TURNO": [
        11, 21, 31, 41
    ]
}
df2 = pd.DataFrame(data=data2)
print(df2.transform(np.square), '\n')

# tb não consegue usar o axis
print(df2.applymap(np.square), '\n')

# A diferença é que ele limita o output então o axis não ira funcionar
# print(df2.transform(lambda x: x.NR_TURNO, axis=1), '\n')


# -------------------------------------
data = {
    "DS_CARGO": [
        "Vereador",
        "Prefeito",
        "Prefeito",
        "Vereador",
    ],
}

df = pd.DataFrame(data=data)

# map e apply tb funciona
print(df["DS_CARGO"].transform(str.upper), '\n')

# Vai dar erro pois não existe applymap para séries.
# print(df["DS_CARGO"].applymap(str.upper), '\n')
