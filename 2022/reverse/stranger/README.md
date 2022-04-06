# Stranger

**Category:** Reverse\
**Difficulty:** Very Easy\
**Flag:** CS457{w3ll_th4t_w4s_34sy!}

## Source Code

```c
#include <stdio.h>
#include <string.h>

int main(int argc, char **argv){
    char buffer[1024];

    printf("> Welcome, stranger.\n");
    printf("> I am afraid you need a keycode to enter this place.\n");
    printf("> Enter keycode:\n");
    printf("> ");
    scanf("%s", buffer);

    if(!strcmp(buffer, "CS457{w3ll_th4t_w4s_34sy!}")){
        printf("> Welcome abroad.\n");
    }else{
        printf("> I am afraid I cannot let you in.\n");
    }

    return 0;
}
```