# Manipulação de Arquivos: Criação, Remoção, Copia, Deleção

import os
import shutil
import numpy as np
from datetime import date


class MagicArq:
    def __init__(self, caminho='./', lista=[]):

        self.caminho = caminho
        self.lista = lista
        self.data_atual = str(date.today())
        self.novo_caminho = str()
        for item in self.lista:
            self.novo_caminho += f'{item}/'
        # print(self.novo_caminho)

    def Allshow(self, opcao=False):

        self.list_diretorio = []
        self.list_arquivo = []
        self.list_documento = []

        for diretorio, arquivo, documento in self.caminho:
            self.list_diretorio.append(diretorio)
            self.list_arquivo.append(arquivo)
            self.list_documento.append(documento)

            if opcao:
                print('Diretorio: ', diretorio)
                print('Arquivos:', arquivo)
                print('Documentos:', documento)
                print('\n')

    def CaminhoOfList(self, opcao=False):
        if opcao:
            print('Lista de Diretorios: ', self.list_diretorio)
            print('Lista de Arquivos:', self.list_arquivo)
            print('Lista de Documentos:', self.list_documento)
        return [self.list_diretorio, self.list_arquivo, self.list_documento]

    # Copia Apenas um arquivo e seus documentos (Não acessa sub-pastas)
    def CopyArq(self, opcao=False):

        try:
            os.mkdir(self.novo_caminho)
        except FileExistsError as e:
            print(f'Pasta {self.novo_caminho} já existe.')

        for diretorio, arquivos, documentos in os.walk(self.caminho):
            for documento in documentos:
                caminho_antigo = os.path.join(diretorio, documento)
                caminho_novo = os.path.join(self.novo_caminho, documento)

                shutil.copy(caminho_antigo, caminho_novo)
                if opcao:
                    print(f'Arquivo {documento} copiado com sucesso.')

    def MoveArq(self):
        pass

    def DelArq(self):
        pass

    def CopyAll(self):
        pass

    def ArqX(self, mais_destino=None):
        cont = 0
        self.mais_destino = mais_destino
        while True:
            if self.mais_destino != None:
                destino = self.caminho + \
                    self.mais_destino + self.lista[cont]
            else:
                destino = self.caminho + self.lista[cont]

            try:
                os.mkdir(destino)
            except FileExistsError as e:
                print(f"Pasta {destino} já existe.")

            if cont == len(self.lista) - 1:
                break
            cont += 1

    def ArqY(self):
        pass


novo_caminho = ['teste10', 'teste11', 'teste12']
teste = MagicArq('teste7/', lista=novo_caminho)
teste.ArqX()
