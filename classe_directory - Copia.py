from os import mkdir
import numpy as np
from datetime import date

data_atual = str(date.today())

diretorios = np.array(
    [['C:/Users/dyego/Desktop/OpTrade/assets/camada8/', data_atual], ['/Trash', '/WorkSpace']])

cont = 0
cont2 = 0
concatenar = str()

while True:

    while True:
        # print(diretorios[cont][cont2])
        if cont % 2 == 0:
            # print(diretorios[cont][cont2])
            concatenar += diretorios[cont][cont2]
            try:
                mkdir(concatenar)
            except FileExistsError as e:
                print(f"Pasta {concatenar} já existe.")
        elif cont % 2 != 0:
            destino = concatenar + diretorios[cont][cont2]
            try:
                mkdir(destino)
            except FileExistsError as e:
                print(f"Pasta {destino} já existe.")

        if cont2 == len(diretorios[cont]) - 1:
            cont2 = 0
            break
        cont2 += 1

    if cont == len(diretorios) - 1:
        break
    cont += 1
