import solucao_1 as s1

while True:
    print('--Entre com 0 para escolher um padrão--')
    print('--Entre com 1 para adicionar um padrão--')
    print('--Entre com 2 para sair do menu--')
    menu = int(input())

    if menu == 0:
        # s1.selecionar_padrao()
        while True:
            print('--Entre com 0 para selecionar o padrão por id--')
            print('--Entre com 1 para selecionar o  padrão por nome--')
            print('--Entre com 2 para listar os padrões--')
            print('--Entre com 3 para voltar--')
            sub_menu = int(input())
            if sub_menu == 2:
                s1.listar()

            if sub_menu == 0:
                identificador = int(input('Digite o identificador: '))
                s1.SelecionarPorId(identificador)
            elif sub_menu == 1:
                nome = str(input('Digite o nome: '))
                s1.SelecionarPorNome(nome)
            elif sub_menu == 3:
                break

    elif menu == 1:
        nome = input('(Opcional) Nomeie o padrao: ')
        print('Exemplo: 5 8 9')
        padrao = input()
        s1.adicionar(nome, padrao)
    elif menu == 2:
        break
