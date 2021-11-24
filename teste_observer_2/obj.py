from listenner import listenner


class objeto(listenner):
    def __init__(self, numero) -> None:
        self.atributo = 0
        self.numero = numero

    def Multiplicacao(self):
        return self.atributo * 2

    def update(self):
        self.atributo = self.numero
