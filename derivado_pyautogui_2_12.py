import pyautogui

# python derivado_pyautogui_2_12.py

with pyautogui.hold('ctrl'):  # Press the Shift key down and hold it.
    # Press the left arrow key 4 times.
    pyautogui.press(['left', 'left', 'left', 'left'])
# Shift key is released automatically.

pyautogui.hotkey('ctrl', 'c')  # Press the Ctrl-C hotkey combination.
