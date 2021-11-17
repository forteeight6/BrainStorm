# 1 caractere é igual a 8 bytes
# Como usar o open do python para ler uma linha especifica.
# https://pt.stackoverflow.com/questions/329935/ler-linha-espec%C3%ADfica-de-um-arquivo-txt
# https://www.delftstack.com/pt/howto/python/how-to-read-specific-lines-from-a-file-in-python/
import sys

# Função adicionar padrao


def remover():
    pass


def adicionar(nome, obj_map):
    padrao = []
    nome = str(nome)
    obj_map = map(int, obj_map.split())
    cont = 0
    for item in obj_map:
        padrao.append(item)

    if nome == '':
        nome = 'vazio'
    try:
        with open('padroes_em_teste.txt', 'r') as file:
            for item in file:
                cont += 1
    except:
        open('padroes_de_teste.txt', 'x').close()
        adicionar(nome, obj_map)

    with open('padroes_em_teste.txt', 'a') as file:
        file.write(str(cont+1))
        file.write(' - ')
        file.write(nome)
        file.write(' - ')
        file.write(str(padrao))
        file.write('\n')


def listar():
    try:
        with open('padroes_em_teste.txt', 'r') as file:
            for linha in file:
                print(linha)
    except:
        open('padroes_em_teste.txt', 'x').close()
        listar()


def SelecionarPorId(identificador) -> int:
    try:
        with open('padroes_em_teste.txt', 'r') as file:
            for linha in file:
                dados = []
                cont = 0
                dado = int(linha.split()[0])
                if dado == identificador:
                    print('Este padrão foi selecionado:', linha)
                    separar = linha.replace('[', '')
                    separar = separar.replace(']', '')
                    separar = separar.replace(',', '')
                    separar = separar.split()

                    while True:
                        if cont > 3:
                            dados.append(int(separar[cont]))

                        if cont == len(separar) - 1:
                            break
                        cont += 1

                    return dados

    except:
        open('padroes_em_teste.txt', 'x').close()
        SelecionarPorId(identificador)


def SelecionarPorNome(nome) -> str:
    dados = []
    count = 0
    try:
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
    except:
        open('padroes_em_teste.txt', 'x').close()
        SelecionarPorNome(nome)


class Padrao:
    def __init__(self, padrao):
        print('ou s -> sim ou n -> nao')
        escolha = str(input()).lower()
        if escolha == 's':
            with open('padrao_setado.txt', 'w') as file:
                try:
                    file.write(str(padrao))

                except:
                    print('Falhou em Setar o Padrão.')
        else:
            print('O padrao não foi setado.')


"""
class Padrao:
    def setar(self, padrao):
        print('Entrou')
        self.padrao = padrao
        print('ou s -> sim ou n -> nao')
        escolha = str(input()).lower()
        if escolha == 's':
            with open('padrao_setado.txt', 'w') as file:
                try:
                    file.write(str(self.padrao))

                except:
                    print('Falhou em Setar o Padrão.')
        else:
            print('O padrao não foi setado.')
"""
