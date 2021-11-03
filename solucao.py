# diretorio_modelo = "nome_da_materia/topico_da_materia/tipo_do_exercicio/titulo_do_exercicio"
# local_de_descricao = "descricoes/"
# local_de_solucoes = "solucoes/"
import os
import random
cronograma_modelo = 'cronograma_modelo.txt'
"""
dados = {
    '04:00': ['Fazer Café da Manhã', 'Fazer Anki', 'Fazer Duolingo'],
    '05:00': ['Voltar a dormir', 'Acordar 05:35', 'Levar Mozçao ao trabalho']
}
"""
aleatorio = random.randint(1, 1000)

arquivo = open(cronograma_modelo, 'a')
arquivo.close()
os.system(f"copy {cronograma_modelo} copias")
arquivo = open(f"copias/{cronograma_modelo}", 'a')
# arquivo.write(dados) Nãao funcionou pois é incompativel.
arquivo.write(str(aleatorio))
arquivo.close()
