# Manipulação de Documentos: Leitura, Escrita, Sobreescrita
# O parametro time é para a função ser ativado o comando após um tempo
# O parametro condicao é para a função ser ativada quando ficar True

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

        if close:
            self.arquivo.close()

    def AutoUpdate(self, time=None, condicao=False):
        pass

    def SpecialClose(self, time=None, condicao=False):
        self.arquivo.close()
