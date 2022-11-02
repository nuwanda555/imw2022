#leer una palabra y decir si es un palíndromo o no, p.e. ele, 145541

palabra=input("Introduce una palabra: ")
if palabra==palabra[::-1]:
    print(palabra," es un palíndromo")
else:
    print(palabra," no es un palíndromo")







    