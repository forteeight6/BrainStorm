# Falhei na tentativa de refatoraçãoo.
# Eu queria inserir o valor real e o inteiro dentro de uma lista e mostrar a lista completa no final.

flag = 'on'
lista_float = []
lista_int = []
lista = []

while True:
    if flag == 'on':
        numero = float(input('Digite um numero [apenas 0 = sair]: '))

        if numero != 0:
            lista_float.append(numero)
            lista_int.append(int(numero))
            print(f'A parte inteira desse numero é {int(numero)}')
        else:
            flag = 'off'

    elif flag == 'off':
        while True:
            opção = str(input(
                'Deseja ver a lista contendo os numeros reais e sua parte inteira [s ou n] ?'))

            if opção.lower() == 's':
                lista = [lista_float, lista_int]
                # print(lista[0][0])
                # print(lista[1][0])
                for item1, item2 in lista:
                    print(item1, item2)
            else:
                break
        print('Até a próxima')
        break
