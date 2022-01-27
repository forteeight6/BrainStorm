lista = [10, 14, 3, 7]
k = 17


def verify(k, lista):
    for item in lista:
        for item2 in lista:
            soma = item + item2
            if soma == k:
                return True
    return False

    # print(list(map(lambda x: x * 2, lista)))
print(verify(k, lista))
