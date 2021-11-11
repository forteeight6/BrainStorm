# Referencia:
# https://youtu.be/KOvgRXZUWVw

from multiprocessing import Process
from random import shuffle, choice
from time import sleep


def selection(lista, quantidade):
    while True:
        escolhidos = []
        for a in range(quantidade):
            shuffle(lista)
            while True:
                escolha = choice(lista)
                if escolha not in escolhidos:
                    escolhidos.append(escolha)
                    break
        sleep(5)
        print(escolhidos)
        escolhidos.clear()


if __name__ == '__main__':

    lista = [1, 2, 3]
    # selection(lista, 2)

    processo_1 = Process(target=selection, args=(lista, 2, ))

    processo_2 = Process(target=selection, args=(lista, 1, ))

    processo_1.start()
    processo_2.start()

    sleep(30)
    processo_1.terminate()

    sleep(30)
    processo_2.terminate()
