# Conversão de tipos
# O exemplo acima mostra uma conversão implícita entre tipos. Apesar de a expressão envolver uma variável do tipo int (a variável x) e uma variável do tipo float (a variável y), o resultado da expressão x * y é implicitamente convertido para o tipo float.

# Existem também conversões explicitas de tipos em Python. Por exemplo, se quisermos que o resultado a expressão acima seja um número inteiro, podemos "forçar" que isso aconteça usando uma conversão explicita de dados:

x = 10
y = 2.5
resultado = int(x * y)
print(resultado)
print(type(resultado))

# Outras conversões também são possíveis, como mostrado no próximo exemplo:

# Converte inteiro para string
x = 10
s = str(x)
print(s)

# Converte float para inteiro
a = 2.5
b = int(a)
print(b)

# Converte inteiro para float
c = 2
d = float(c)
print(d)
