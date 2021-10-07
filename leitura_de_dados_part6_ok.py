# Imprimindo uma string.
s = "Olá, mundo!"
print(s)

# Tipo de uma string.
type(s)

# Tamanho de uma string.
len(s)

# Concatenação
print("Meu Brasil " + "brasileiro")

# Substitui uma substring por alguma outra coisa.
s1 = s.replace("mundo", "meu abacate")

print(s1)

# A string s começa com "Olá"?
print(s.startswith("Olá"))

# A string s termina com "mundo"?
print(s.endswith("mundo"))

# Quantas ocorrências da palavra "abacate" a string s1 possui?
print(s1.count("abacate"))

# Como "capitalizar" (transformar a primeira letra da primeira palavra em maiúscula).
s = "ordem e progresso"
print(s.capitalize())

# Como verificar se uma string só possui números.
'12345'.isdigit()
'12345abc'.isdigit()

# Como verificar se uma string é alfanumérica (só possui letras e números).
'12345abc'.isalnum()

s = "Olá, mundo!"
print(s[0])
print(s[2])
print(s[6])

s = "Olá, mundo!"
print(s[-1])
print(s[-2])
print(s[-4])

print(s[1:3])

s = "Olá, mundo!"
print(s[:3])

print(s[5:])

# Retorna toda a string
print(s[:])

s = "Olá, mundo!"
print(s[::2])  # Imprime os caracteres nos índices pares
print(s[1::2])  # Imprime os caracteres nos índices ímpares

frase = "Mundo mundo vasto mundo"
print(frase[::-1])
