lista = []
flag = 0
while True:
    if flag == 0:
        a = str(input())
        b = float(input())
        c = float(input())

        lista.append([a, b, c])

        while True:
            flag = int(input())
            if flag == 0 or flag == 1:
                break
            else:
                continue
    else:
        for item1, item2, item3 in lista:
            processo = (float(item2) * 1) + (float(item3) * 1)
            print(f'{item1} {processo}.')
        break
