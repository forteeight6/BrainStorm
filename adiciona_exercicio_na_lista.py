def adicionar_exercicio(exercicios):
    lista_de_exercicios = exercicios

    with open('database/lista_de_exercicios_com_solução.txt', 'a') as f:
        for item in lista_de_exercicios:
            f.write('{}\n'.format(item))
            f.write('{}\n'.format(len(item) * '-'))
