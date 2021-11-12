print("http://devfuria.com.br/python/yield/")
print('\n')
print("https://medium.com/@bernardo.costa/quando-usar-o-yield-no-python-ebae18b144ba")
print("\n")
print("Compare o Yeld com return com relação ao uso da memoria, para fazer isso use a função getsizeof() do sys para medir melhor essa diferença pois ela retorna o tamanho de bytes gastos pelo objeto passado por parâmetro.")


def Selection(lista, quant):
    item1 = 'No Pain No Gain'
    item2 = True
    yield item1
    yield item2
    for item3 in lista:
        item3 = item3 * quant
        yield item3


lista = [5, 4, 3]

print("""
    # Gerando todos os objetos
    for objeto in Selection(lista, 2):
        print(objeto)
""")
print("\n")

objeto = Selection(lista, 2)
# Next() é uma função Iteradora

objeto1 = next(objeto)
print('Este é o objeto1:', objeto1)
print("\n")

objeto2 = next(objeto)
print('Este é o objeto2: ', objeto2)
print("\n")

objeto3 = next(objeto)
print('Este é o objeto3:', objeto3)
