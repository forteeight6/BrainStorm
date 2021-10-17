import modulos.adiciona_exercicio_na_lista as add

lista_de_exercicios = []
while True:
    questao = str(input('Adicione um exercicio: '))
    lista_de_exercicios.append(questao)
    opcao = str(input('Deseja continuar [s][n] ? '))

    if opcao == 's':
        continue
    elif opcao == 'n':
        add.adicionar_exercicio(lista_de_exercicios)
        break
    else:
        print('Comando Invalido')
