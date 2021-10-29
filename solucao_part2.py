import time
from selenium import webdriver
# from credentials import get_credentials
# username = credentials['username']
# password = credentials['password']
# https://chromedriver.chromium.org/downloads
# Crie variavel de ambiente para este executavel
chromedriver_path = "C:\chromedriver_win32\chromedriver.exe"
url = "https://br.tradingview.com/chart/WgQ4R9zR/"

# Abrir


def open_browser(chrodriver_path):
    chrome_options = webdriver.ChromeOptions()

    preferences = {
        "download.prompt_for_download": False,
        "download.default_directory": r"C:\Users\dyego\Desktop\Gerenciador de Exercicios\databases\python\trilhas_de_projetos\escreva_script\bot_para_tradingview\Solucoes",
        "download.directory_upgrade": True,
        "profile.default_content_settings_popups": 0,
        "profile.default_content_setting_values.notifications": 2,
        "profile.default_content_setting_values.automatic_downloads": 1
    }

    chrome_options.add_experimental_option("prefs", preferences)
    driver = webdriver.Chrome(
        executable_path=chromedriver_path, chrome_options=chrome_options)
    return driver


driver_1 = open_browser(chromedriver_path)

# Fazer Login
"""
def site_login(username, password, url, driver):
    driver.get(url)
    driver.find_element_by_class_name("tv_dialog_close").click()

    driver.find_element_by_name("username").send_keys(username)
    driver.find_element_by_name("password").send_keys(password)
    driver.find_element_by_class_name("tv-button_loader").click()
    time.sleep(10)
    return driver

driver_2 = site_login(username, password, url, driver_1)
"""

# Pegar Informação


def get_csv(driver):
    driver.find_element_by_xpath(
        '///div[///@title="Export screener data to a CSV file"]').click()


get_csv(driver_2)
