
#función que se le pasa una frase y devuelve las letras que tiene
def num_letras(frase):
    return len(frase)


#dada una frase y una letra devuelve cuantas veces esta letra en frase
def contar_letras(frase,letra):
    contador=0
    for l in frase:
        if l==letra:
            contador+=1
    return contador

