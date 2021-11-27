import numpy as np
import json as js
import pandas as pd
import matplotlib.pyplot as plt
import matplotlib.animation as anima
from time import sleep, time
from datetime import datetime
# Manipulação de Documentos: Leitura, Escrita, Sobreescrita
# O parametro <time> é para a função ser ativado após um tempo determinado, na lógica o parametro da condição sera trocado para True.
# O parametro <condicao> é para a função ser ativada quando ficar True, pode se conbinar com diversas estrategias lógicas para trocar para True(Alem do proprio temporizador embutido).

# O parametro <anima> Cria um grafico que se atualiza em tempo real.
# O parametro <thread> Permite a criação de um subprocesso unico.
# O parametro <multiprocessing> Permite a criação de multiplos subprocessos.
# O parametro <manager> permite que o multiprocessing retorne uma variavel compartilha com os valores do subprocesso.
# O parametro <config> sera responsavel pela inserção de um doc em json responsavel pela configuração do objeto, essa configuração pode ser atualizada pelo método AutoUpdate.


class MagicDoc:
    def __init__(self, arquivo):
        self.arquivo = arquivo

    def LerDoc(self, formatLeitura, close=True, time=None, condicao=False):
        self.formatLeitura = formatLeitura
        self.arquivo = open(self.arquivo, 'r')
        if self.formatLeitura.lower() == 'json':
            pass
        elif self.formatLeitura.lower() == 'dict':
            pass
        elif self.formatLeitura.lower() == 'tuple':
            pass
        elif self.formatLeitura.lower() == 'list':
            pass
        elif self.formatLeitura.lower() == 'set':
            pass
        elif self.formatLeitura.lower() == 'array':
            pass
        elif self.formatLeitura.lower() == 'dataframe':
            pass

        if close:
            self.arquivo.close()

    def EscreverDoc(self, formatEscrita, close=True, time=None, condicao=False):
        self.formatEscrita = formatEscrita
        self.arquivo = open(self.arquivo, 'a')
        if self.formatEscrita.lower() == 'json':
            pass
        elif self.formatEscrita.lower() == 'dict':
            pass
        elif self.formatEscrita.lower() == 'tuple':
            pass
        elif self.formatEscrita.lower() == 'list':
            pass
        elif self.formatEscrita.lower() == 'set':
            pass
        elif self.formatEscrita.lower() == 'array':
            pass
        elif self.formatEscrita.lower() == 'dataframe':
            pass

        if close:
            self.arquivo.close()

    def SobrescreverDoc(self, formatSobrescrita, close=True, time=None, condicao=False):
        self.formatSobrescrita = formatSobrescrita
        self.arquivo = open(self.arquivo, 'w')
        if self.formatSobrescrita.lower() == 'json':
            pass
        elif self.formatSobrescrita.lower() == 'dict':
            pass
        elif self.formatSobrescrita.lower() == 'tuple':
            pass
        elif self.formatSobrescrita.lower() == 'list':
            pass
        elif self.formatSobrescrita.lower() == 'set':
            pass
        elif self.formatSobrescrita.lower() == 'array':
            pass
        elif self.formatSobrescrita.lower() == 'dataframe':
            pass

        if close:
            self.arquivo.close()

    def LereEscreverDoc(self, formatLereEscrever, close=True, time=None, condicao=False):
        self.formatLereEscrever = formatLereEscrever
        self.arquivo = open(self.arquivo, 'r+')
        if self.formatLereEscrever.lower() == 'json':
            pass
        elif self.formatLereEscrever.lower() == 'dict':
            pass
        elif self.formatLereEscrever.lower() == 'tuple':
            pass
        elif self.formatLereEscrever.lower() == 'list':
            pass
        elif self.formatLereEscrever.lower() == 'set':
            pass
        elif self.formatLereEscrever.lower() == 'array':
            pass
        elif self.formatLereEscrever.lower() == 'dataframe':
            pass

        if close:
            self.arquivo.close()

    # AutoUpate:
    # -- Quando executado verifica no doc permissoes(json) se o parametro referente ao arquivo monitorado esta True ( o parametro status altera a permissão), caso sim, o arquivo monitorado(self.arquivo) sera alterado pelo que estiver no parametro modificador
    def AutoUpdate(self, status=False, modificador=None, time=None, condicao=False):
        pass

    def SpecialClose(self, time=None, condicao=False):
        self.arquivo.close()

    # Lembre-se do projeto de real data time.
    # Doc contendo valores atualizaveis ex:Dados Financeiros, que serão usado no gráfico.
    def DocToGraphic(self, config=None, anima=False, thread=False, multiprocessing=False, manager=False, time=None, condicao=False):
        pass

    # Lembre-se do projeto de Geolocalização
    # Doc contendo valores atualizaveis ex:Longitude/Latitude que serão usado no mapa.
    def DocToMap(self, config=None, anima=False, thread=False, multiprocessing=False, manager=False, time=None, condicao=False):
        pass
