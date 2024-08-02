import PySimpleGUI as sg

sg.popup("Ola malta")
sg.popup_ok("Tudo Bem?")
sg.popup_yes_no("Responda Sim ou Não")
sg.popup_cancel("Clique em Cancelar")
sg.popup_ok_cancel("Clique em Ok ou Cancelar")
sg.popup_error("Computador vai explodir")
sg.popup_auto_close("Essa janela vai fechar em poucos segundos")

text = sg.popup_get_text('Escreva a palavra-passe', password_char='*')
sg.popup(f'Password:{text}')
path = sg.popup_get_file('Selecione um ficheiro')
print(path)

path = sg.popup_get_folder('Selecione o directorio')
print(path)

for i in range(1000):
    sg.one_line_progress_meter(
        'progress_bar',
        i + 1,
        1000,
        'this progress bar key',
        'this is a progress bar'
    )
text1 = sg.popup_get_text('Escreva texto1: ')
print(text1)

text2 = sg.popup_get_text('Escreva texto2: ')
print(text2)

sg.popup(
    'window',
    title='Hello',
    button_color=('#A81B0C', '#FFFFFF'),
    background_color= '#F47264',
    line_width=2,
    custom_text='text'
)