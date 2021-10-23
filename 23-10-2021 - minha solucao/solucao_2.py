# R E F A T O R A Ç Ã O
"""
Checklist

# ADICIONAR INTRODUÇÃO DO PROGRAMA - ok
# Exemplo: Seja Bem Vindo ao Calculando Aluguel de Carros ^^.
# ADICIONAR LOOP DE REPETIÇÃO - ok

"""
print('Seja Bem Vindo ao Calculando Aluguel de Carros ^^ ')

lista = []
flag = 0
while True:
    if flag == 0:
        # entrada de dados
        nome_do_contratante = str(input('Qual é o nome do contratante? '))
        km_percorrido = float(input('Quantos km foi percorrido? '))
        dias_alugado = float(input('Quantos dias foram alugados? '))

        # Da para transformar o contratante em obj e inserir as caracteristicas usando getters and setters.

        lista.append([nome_do_contratante, km_percorrido, dias_alugado])

        while True:
            flag = int(
                input('Deseja calcular outro aluguel? 0 = Sim 1 = Não '))
            if flag == 0 or flag == 1:
                break
            else:
                continue
    else:
        # Processamento
        for item1, item2, item3 in lista:
            # print(f'{item1} - {item2} - {item3}')
            pagar = (float(item2) * 0.15) + (float(item3) * 60)
            print(f'{item1} deve pagar {pagar}.')
        print('Adeus até a próxima. ^^')
        break
