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
        # print(array)
        # array[1, 1] = 'Ollywer'
        # print(array)

    def show_graphc(self, opção=False):
        if opção:
            self.array[0][2] = True
            with open(self.arquivo, 'w') as file:
                for indice, linha in enumerate(self.array):
                    # print(linha)
                    for indice2, item in enumerate(linha):

                        if indice2 == 0:
                            file.write(self.array[indice][indice2])
                        elif indice2 < 2:
                            file.write(' ')
                            file.write(self.array[indice][indice2])
                            file.write(' ')
                        else:
                            file.write(self.array[indice][indice2])
                            file.write(' ')
                            file.write('\n')


teste = update('modelo.py')
teste.show_graphc(True)
