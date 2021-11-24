from typing import Type
from listenner import listenner
from obj import objeto
from typing import Type


class Publicador:
    def __init__(self):
        self.listenners = []

    def addListenner(self, objeto: Type[listenner]):
        self.listenners.append(objeto)

    def comando(self):
        self.numero = int(input('Digite um numero:'))

        for obj in self.listenners:
            obj.update()
            self.listenners.clear()


Publicador = Publicador()
Objeto = objeto()

Publicador.addListenner(Objeto)

print(Objeto.atributo)
Publicador.comando()
print(Objeto.atributo)
