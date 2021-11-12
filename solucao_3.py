class Flag:

    def __init__(self):
        with open('flag.txt', 'r') as file:
            self.data = int(file.read().replace('\n', ''))

    def add(self, num=1):
        self.num = num
        self.data += num

        with open('flag.txt', 'w') as file:
            file.write(f'{self.data}')
        with open('flag.txt', 'r') as file:
            self.data = int(file.read().replace('\n', ''))

    def rmv(self, num2=1):
        self.num2 = num2
        self.data -= num2

        with open('flag.txt', 'w') as file:
            file.write(f'{self.data}')
        with open('flag.txt', 'r') as file:
            self.data = int(file.read().replace('\n', ''))

    def status(self):
        with open('flag.txt', 'r') as file:
            self.data = int(file.read().replace('\n', ''))
            return self.data


class SafePoint(Flag):
    def __init__(self, item):
        self.flag = Flag()
        self.item = item

    def run(self):
        file = open('WINZ21_21-10.txt', 'a')

        if self.flag.status() < 2:
            file.write(f'{self.item}, ')
            self.flag.add()
        else:
            file.write('\n')
            file.write(f'{self.item}, ')
            self.flag.rmv()
