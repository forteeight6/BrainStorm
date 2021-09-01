import PySimpleGUI as sg

# Criar as janelas e estilos(layouts)
# Criar as janelas iniciais
# Criar loop de leitura de eventos
# Lógica do que deve acontecer ao clicar nos botões


def janela_login():
    sg.theme('Reddit')
    layout = [
        [sg.Text('Nome')],
        [sg.Input()],
        [sg.Button('Continuar')]
    ]
    return sg.Window('Login', layout, finalize=True)


def janela_pedido():
    sg.theme('Reddit')
    layout = [
        [sg.Text('Fazer Pedido')],
        [sg.Checkbox('Pizza de Peperoni', key='pizza1'), sg.Checkbox(
            'Pizza de Frango com Catupiry', key='pizza2')],
        [sg.Button('Voltar'), sg.Button('Fazer Pedido')]
    ]
    return sg.Window('Montar Pedido', layout, finalize=True)


janela1, janela2 = janela_login(), None

while True:
    window, event, values = sg.read_all_windows()
    # Quando Janela for fechada
    if window == janela1 and event == sg.WIN_CLOSED:
        break
    # Quando queremos ir para outra janela
    if window == janela1 and event == 'Continuar':
        janela2 = janela_pedido()
        janela1.hide()
    if window == janela2 and event == 'Voltar':
        janela2.hide()
        janela1.un_hide()
    if window == janela2 and event == 'Fazer Pedido':
        if values['pizza1'] == True and values['pizza2'] == True:
            sg.popup(
                'Foram solicitados uma Pizza Peperoni e uma Pizza Frango com Catupiry')
        elif values['pizza1'] == True:
            sg.popup('Foi solicitado apenas uma Pizza de Peperoni')
        elif values['pizza2'] == True:
            sg.popup('Foi solicitado apenas uma Pizza de Frango com Catupiry')
