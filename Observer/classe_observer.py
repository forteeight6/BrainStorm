# https://refactoring.guru/pt-br/design-patterns/observer
from abc import ABC, abstractmethod


class Observer(ABC):  # interface
    @abstractmethod
    def update(self):
        pass
