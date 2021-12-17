# title: Python PANDAS - Como mapear valores na series
# fonte: https://www.youtube.com/watch?v=RnHCw07NK3g&list=PLEdfCNsWt0gxURVswsV_STMrCo_n7rD5M&index=39&ab_channel=ProgramePython
import pandas as pd
import numpy as np

data = {
    "DS_CARGO": [
        "Vereador",
        "Prefeito",
        "Prefeito",
        "Vereador",
    ],
}

df = pd.DataFrame(data=data)
print(df["DS_CARGO"].map('cargo : {}'.format), '\n')

df = pd.DataFrame(data=data)
print(df["DS_CARGO"].map('cargo : {}'.format, na_action="ignore"), '\n')

df = pd.DataFrame(data=data)
print(df["DS_CARGO"].map({'Prefeito': 'teste', 'Vereador': 'oi'}), '\n')
# ----------------------------
data2 = {
    "QT_VOTOS_LEGENDA": [
        10, 20, 30, 40
    ]
}
df2 = pd.DataFrame(data=data2)

print(df2["QT_VOTOS_LEGENDA"].map(np.square), '\n')
