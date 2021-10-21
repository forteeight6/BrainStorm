import pyautogui
import time
pyautogui.click(700, 700)
pyautogui.typewrite('graphicsnotes')
pyautogui.press('enter')
time.sleep(2)
pyautogui.hotkey('ctrl', 's')
pyautogui.typewrite('graphicsnotes')
pyautogui.press('enter')
time.sleep(2)
