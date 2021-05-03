number = int(input('Digite um numero inteiro qualquer: '))
print('-Escolha a base de conversão-')
base = str(input('[b]binario, [o]octal, [h]hexadecimal: '))
if base == 'b':
    print(bin(number))
elif base == 'o':
    print(oct(number))
elif base == 'h':
    print(hex(number))