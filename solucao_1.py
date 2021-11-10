from threading import Thread
from random import shuffle, choice
from time import sleep

global var

var = False


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
        if var:
            break
        sleep(5)
        print(escolhidos)
        escolhidos.clear()


lista = [1, 2, 3]
# selection(lista, 2)

Thread(target=selection, args=(lista, 2, )).start()

sleep(30)
var = True
