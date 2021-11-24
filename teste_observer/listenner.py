from abc import ABC, abstractmethod


class listenner(ABC):
    @abstractmethod
    def update(self):
        pass
