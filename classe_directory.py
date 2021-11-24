from os import mkdir
import numpy as np
from datetime import date


class diretorio:
    def __init__(self) -> None:
        self.data_atual = str(date.today())
        self.destino_padrao = f'C:/Users/dyego/Desktop/OpTrade/assets/camada8/{self.data_atual}'

        try:
            mkdir(self.destino_padrao)
        except FileExistsError as e:
            print(f"Pasta {self.destino_padrao} já existe.")

    def multiplaPastas(self, pastas, mais_destino=None):
        cont = 0
        self.pastas = pastas
        self.mais_destino = mais_destino
        while True:
            if self.mais_destino != None:
                destino = self.destino_padrao + \
                    self.mais_destino + self.pastas[cont]
            else:
                destino = self.destino_padrao + self.pastas[cont]

            try:
                mkdir(destino)
            except FileExistsError as e:
                print(f"Pasta {destino} já existe.")

            if cont == len(self.pastas) - 1:
                break
            cont += 1

    def diretorios(self, diretorios, mais_destino=None):

        self.diretorios = diretorios
        self.mais_destino = mais_destino
        if mais_destino == None:
            self.novo_destino_padrao = self.destino_padrao
        else:
            self.novo_destino_padrao = self.destino_padrao + self.mais_destino
            print(self.novo_destino_padrao)
        cont = 0
        while True:

            self.novo_destino_padrao += self.diretorios[cont]

            try:
                mkdir(self.novo_destino_padrao)
            except FileExistsError as e:
                print(f"Pasta {self.novo_destino_padrao} já existe.")

            if cont == len(diretorios) - 1:
                break
            cont += 1


lista = ['/teste10', '/teste2', '/teste30']

teste = diretorio()
teste.diretorios(lista, lista[1])
