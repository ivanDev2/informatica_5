//Si scriva un programma in c che permetta di effettuare un overflow sull'operazione di somma evidenziando i limiti superiori ed inferiori del tipo di dati short

#include <stdio.h>
#include <limits.h>

int main() {
    int SHORT_MAX = 32767; 
    int SHORT_MIN = -32768; 
    int num1, num2, somma;

    printf("Inserisci il primo numero : ");
    scanf("%d", &num1);
    printf("Inserisci il secondo numero : ");
    scanf("%d", &num2);
    somma = num1 + num2;
    printf("La somma e' : %d\n", somma);

    return 0;  
}