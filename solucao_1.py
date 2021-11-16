# 1 caractere é igual a 8 bytes
# Como usar o open do python para ler uma linha especifica.
# https://pt.stackoverflow.com/questions/329935/ler-linha-espec%C3%ADfica-de-um-arquivo-txt
# https://www.delftstack.com/pt/howto/python/how-to-read-specific-lines-from-a-file-in-python/
import sys

# Função adicionar padrao


def adicionar(nome, obj_map):
    padrao = []
    nome = str(nome)
    obj_map = map(int, obj_map.split())
    cont = 0
    for item in obj_map:
        padrao.append(item)

    if nome == '':
        nome = 'vazio'

    with open('padroes_em_teste.txt', 'r') as file:
        for item in file:
            cont += 1

    with open('padroes_em_teste.txt', 'a') as file:
        file.write(str(cont+1))
        file.write(' - ')
        file.write(nome)
        file.write(' - ')
        file.write(str(padrao))
        file.write('\n')


def listar():
    with open('padroes_em_teste.txt', 'r') as file:
        for linha in file:
            print(linha)


def SelecionarPorId(identificador) -> int:
    with open('padroes_em_teste.txt', 'r') as file:
        for linha in file:
            dado = int(linha.split()[0])
            if dado == identificador:
                print('Este padrão foi selecionado:', linha)
                return linha


def SelecionarPorNome(nome) -> str:
    dados = []
    count = 0
    with open('padroes_em_teste.txt', 'r') as file:
        for linha in file:
            dado = int(linha.split()[0])
            dados.append(linha.split()[2])
            if dados[dado-1] == nome:
                print(linha)
                count += 1
        if count > 1:
            opcao = int(input('Agora selecione por ID: '))
            SelecionarPorId(opcao)


"""
class Padrao:
    def __init__(self, padrao) -> list():
        self.padrao = padrao

    def setar(self):
        print('s -> sim e n -> nao')
        escolha = str(input()).lower()
        if 's' in escolha:
            with open('padroes_em_teste.txt', 'r') as file:
"""
