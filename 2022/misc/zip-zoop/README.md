# Zip Zoop

**Category:** Misc\
**Difficulty:** Easy\
**Author:** gioak\
**Flag:** CS457{z1pp3d_4nd_sh1pp3d}

## Description

I lost my text in a loop

## Solve

Decompress 301 times and you will end up with the flag

## Source Code

```sh
echo "Creating flag.txt"
echo 'CS457{z1pp3d_4nd_sh1pp3d}' > flag.txt

echo "Compression time"
zip -m flag2.zip flag.txt

for i in {1..150};
do
zip -m flag.zip flag2.zip
zip -m flag2.zip flag.zip
done

echo "You are ready. Your file is flag.zip"
```

## Solution

```sh
echo "Decompress 300 times"
for i in {1..150};
do
unzip -o flag.zip
unzip -o flag2.zip
done

unzip -o flag.zip

echo "Flag is:"
cat flag.txt
```