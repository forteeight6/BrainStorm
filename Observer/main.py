import sys
import numpy as np
from typing import Type
from src.Classes.legado.classe_observer import Observer
from src.Classes.legado.classe_grafico import Grafico


class Terminal():
    def __init__(self) -> None:
        self.status = False
        self.objetos = []
        # self.comando = []

    def insertCommand(self):
        self.dados = list(map(str, sys.stdin.readline().split()))

        self.array = np.array(self.dados)

        with open('opcoes.txt', 'r') as file:
            arquivo = file.read().replace('\n', '').split()
            for dado in self.dados:
                verifica = dado in arquivo
                if verifica:
                    self.status = True
                    continue
                else:
                    self.status = False
                    break

            if self.status:
                # for obj in self.objetos:
                self.objetos[-1].update()
                self.objetos.clear()

    def addObjeto(self, Grafico: Type[Observer]):
        # Falta adicionar a verificação se o comando é este mesmo.
        self.objetos.append(Grafico)

    def objetoStatus(self):
        return self.status


terminal = Terminal()
grafico = Grafico()

while True:
    print(terminal.objetoStatus())
    terminal.addObjeto(grafico)
    terminal.insertCommand()
    print(grafico.window)
