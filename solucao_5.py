from threading import Thread
from time import sleep


class Grafico:

    def __init__(self):
        self.opcao = 1
        if self.opcao == 1:
            while True:
                print('Fecha o grafico.')
                sleep(5)
        elif self.opcao == 2:
            while True:
                print('Abre o grafico.')
                sleep(5)

    def parar(self):
        # super().Grafico.__init__(parar=2)
        print('teste')


obj = Grafico()
thread = Thread(target=obj)
thread.start()


while True:
    teste = int(input())
    if teste == 5:
        obj.opcao = 2
