# Budget Crypto

## Flag

CS457{l3t_m3_1n!!!}

## Source Code

```c
#include <stdio.h>
#include <string.h>

char flag[] = {0x47, 0x73, 0x5d, 0x26, 0x0, 0x7f, 0x11, 0x36, 0x27, 0x5a, 0x5b, 0x4e, 0x59, 0x67, 0x68, 0x63, 0x10, 0x59, 0x77, 0x68, 0x30, 0x54, 0x36, 0x70, 0x45, 0x7d, 0x50, 0x1d, 0x23, 0x4a};

char key[] = {0x04, 0x20, 0x69, 0x13, 0x37};

int main(int argc, char **argv){
    char buffer[1024];
    printf("Oh hi, I've never seen you here before... What's the secret passcode?\n> ");

    scanf("%s", buffer);

    for(int i = 0; i < strlen(buffer); ++i){
        if(buffer[i] != (flag[i] ^ key[i % sizeof(key)])){
            printf("Intrudor! Stop right there!\n");
            return 0;
        }
    }

    printf("Welcome!\n");

    return 0;
}
```

## Solve