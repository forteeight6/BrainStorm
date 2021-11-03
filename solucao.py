from pandas import read_excel, DataFrame

produtos = {
    'Nome': ['Sabao em Po', 'Vinagre', 'Livro'],
    'Quantidade': [2, 5, 8],
    'Preco': [18.50, 2.50, 35.80]
}

formatar = DataFrame(data=produtos)
formatar.to_excel('produtos.xlsx', index=False)
print(read_excel('produtos.xlsx'))

# Acertei
