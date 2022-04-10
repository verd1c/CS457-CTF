# Cat Meme

**Category:** Misc\
**Difficulty:** Very Easy\
**Author:** gioak\
**Flag:** CS457{H1dd3n_m3ss4g3s_m3ow}

## Description

Inspector Clouseau believes that there is a hidden message inside that image

## Solve

Use the text you see in the image as password and use steghide to solve it

## Source Code

```sh
echo "Creating flag.txt"
echo 'CS457{H1dd3n_m3ss4g3s_m3ow}' > flag.txt

echo "Steghide embed flag.txt to image"
steghide embed -ef flag.txt -cf original.jpg -p DISNEYLAND -sf meme.jpg
```

## Solution

```sh
echo "Steghide extract"
steghide extract -sf meme.jpg -p DISNEYLAND

echo "Print flag"
cat flag.txt
```
or use:
```
https://futureboy.us/stegano/decinput.html
```