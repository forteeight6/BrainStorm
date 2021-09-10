# https://www.youtube.com/watch?v=m8orGLxO03s&ab_channel=Ot%C3%A1vioMiranda

# https://www.youtube.com/watch?v=6a4m7L7juKQ

import os
import shutil

origem = 'C:/Users/dyego/Desktop/Cronos/ambiente_de_idealizacao/Micro-sistema - Exercicios_de_testes_comportamentais/scripts/0 - Comportamento_em_construcao/'
destino = 'C:/Users/dyego/Desktop/Cronos/ambiente_de_idealizacao/Micro-sistema - Exercicios_de_testes_comportamentais/scripts/0 - Comportamento_em_construcao/teste/'

try:
    os.mkdir(destino)
except FileExistsError as e:
    print(f'Pasta {destino} já existe.')
    # pass

for root, dirs, files in os.walk(origem):
    for file in files:
        old_file_path = os.path.join(root, file)
        print(old_file_path)
