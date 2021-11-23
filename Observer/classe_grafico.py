from .classe_observer import Observer


class Grafico(Observer):
    def __init__(self) -> None:
        self.window = 'closed'

    def openWindow(self):
        return self.window

    def update(self):
        print("Funcionou")
        self.window = 'Opened'
