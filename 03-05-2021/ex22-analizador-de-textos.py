texto = str(input('Digite um texto: ')).strip()

print(f'Convertido em Maiusculas: {texto.upper()}')
print(f'Convertido em Minuscula: {texto.lower()}')
print(f'Total de letras: {len(texto) - 1}')
print(f'Total de letras da primeira palavra: {len(texto[0].split()) + 1}')