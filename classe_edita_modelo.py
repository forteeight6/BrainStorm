import numpy as np


class update:
    def __init__(self, arquivo):
        dados1 = []
        self.arquivo = arquivo
        with open(arquivo, 'r') as file:
            dados = file.readlines()
            for linha in dados:
                dados1.append(linha.split())

        self.array = np.array(dados1)
        # print(self.array)
        # self.array[5][2] = True
        # print(self.array)

    def update_graphc(self, linha, opção=False, especial=True):
        if opção:
            self.array[linha][2] = True
        else:
            self.array[linha][2] = False
        # print(self.array)

        with open(self.arquivo, 'w') as file:
            for a in self.array:
                for cont, b in enumerate(a):
                    if cont == 0:
                        file.write(str(b))
                    elif cont == 1:
                        file.write(' ')
                        file.write(str(b))
                        file.write(' ')
                    elif cont == 2:
                        if especial:
                            file.write(str(b))
                            file.write('\n')
                        else:
                            file.write(str(False))
                            file.write('\n')


# teste = update('modelo.py')
# teste.update_graphc(7, True, False)
