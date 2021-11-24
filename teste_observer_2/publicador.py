from typing import Type
from listenner import listenner
from typing import Type


class Publicador:
    def __init__(self):
        self.listenners = []

    def addListenner(self, objeto: Type[listenner]):
        self.listenners.append(objeto)

    def Atualizar(self):
        for obj in self.listenners:
            obj.update()
            self.listenners.clear()
