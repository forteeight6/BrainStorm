# referencia:
# https://stackoverflow.com/questions/10415028/how-can-i-recover-the-return-value-of-a-function-passed-to-multiprocessing-proce

from multiprocessing import Process, Manager
from random import shuffle, choice
from time import sleep


def selection(lista, quantidade, return_list):
    while True:
        escolhidos = []
        for a in range(quantidade):
            shuffle(lista)
            while True:
                escolha = choice(lista)
                if escolha not in escolhidos:
                    escolhidos.append(escolha)
                    return_list.append(escolha)
                    break
        sleep(5)
        print(escolhidos)
        escolhidos.clear()


if __name__ == '__main__':
    manager = Manager()

    return_list = manager.list()

    lista = [1, 2, 3]

    # selection(lista, 2)

    processo_1 = Process(target=selection, args=(lista, 2, return_list, ))

    processo_1.start()

    sleep(30)
    processo_1.terminate()

    print(return_list)
