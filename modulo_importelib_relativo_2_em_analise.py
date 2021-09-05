# fonte: https://stackoverflow.com/questions/10675054/how-to-import-a-module-in-python-with-importlib-import-module
"""
import importlib as il

obj = il.import_module('.modulo', __name__)

obj.text()

Acho melhor usar, importlib.import_module('.c', __name__)pois você não precisa saber sobre a e b.

"""
