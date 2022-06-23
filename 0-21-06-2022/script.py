import random

class Analyzer:

	def __init__(self, function_list, special='dropSearch'):
		self.function_list = function_list
		eval('self.' + special + '()')

	def _function_list(self):	
		for function in self.function_list:
			yield eval(function + '()')

	def dropSearch(self):
		while len(self.function_list) != 0:
			for i, f in enumerate(self._function_list()):
				print(f)
				if f:
					self.function_list.pop(i)

	def resetSearch(self):
		pass

if __name__ == '__main__':

	def pattern_1():
		op = random.choice([True, False, False, False, False])
		if op:
			return True
		else:
			return False

	def pattern_2():
		op = random.choice([True, False, False, False, False])
		if op:
			return True
		else:
			return False

	def pattern_3():
		op = random.choice([True, False, False, False, False])
		if op:
			return True
		else:
			return False

	function_list = ['pattern_1', 'pattern_2', 'pattern_3']
	Analyzer(function_list)