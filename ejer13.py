#Leer una frase y mostrar las palabras que estén repetidas.

#Leer una frase y mostrar cual es la palabra que más veces se repite.
repetidos = dict()
frase = input("Introduce una frase: ").lower()
palabras= frase.split()
for palabra in palabras:
    repetidos[palabra] = repetidos.get(palabra, 0)+1 #Crear un diccionario con las palabras y las veces que se repite cada una
print(repetidos)

mas_veces=0
palabramasveces=0
for palabra, veces in repetidos.items():
    if veces > mas_veces:
        mas_veces = veces
        palabramasveces = palabra

print("La palabra que más se repite es:", palabramasveces)