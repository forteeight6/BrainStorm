from listenner import listenner


class objeto(listenner):
    def __init__(self) -> None:
        self.atributo = 0

    def Multiplicacao(self):
        self.atributo * 2

    def update(self):
        self.atributo = 2
