frase1='Esta frase fue la primera'
frase2='Esta es la segunda frase'
lista=[]

def iguales(frase1, frase2):
    frase1=frase1.split(' ')
    frase2=frase2.split(' ')
    for palabra1 in frase1:
        if palabra1 in frase2:
                lista.append(palabra1)
    return lista

print(iguales(frase1,frase2))