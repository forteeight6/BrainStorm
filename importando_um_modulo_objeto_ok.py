#from modulo import text
import modulo as mdl

objeto1 = mdl.Pessoa(nome='Ollywer', idade=23)

print(objeto1.getNome())
print(objeto1.getIdade())

objeto1.setNome(nome='Joao')
objeto1.setIdade(idade=18)

print(objeto1.getNome())
print(objeto1.getIdade())
