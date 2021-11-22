# Ira executar, atualizar e fechar os gráficos
from threading import Thread
from time import sleep
from interface import Interface

global var
# Vai ser usado quando Fechar o programa
var = False

# Pode ser usado para executar varios graficos


class Permissao(Thread):
    def __init__(self):
        Thread.__init__(self)
        while True:
            with open('permissao.py', 'r') as file:
                dado = file.read()

            if dado == 'Desbloqueado':
                interface = Interface()
                interface.atualiza_interface()
                interface.show()
                if interface.window == 'close':
                    interface.close()
                pass
            else:
                continue

            if var:
                break
            sleep(2)


# myThread = Thread(target=Permissao)
# myThread.start()
