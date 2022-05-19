# WALL•E

**Category:** Web\
**Difficulty:** Easy\
**Author:** gioak\
**Flag:** CS457{Robots_Ar3_th3_future}

## Description

A `robot ` who is responsible for cleaning a waste-covered Earth meets another robot and falls in love with her. Together, they set out on a journey that will alter the fate of mankind.

*Note: Do not use nmap or gobuster or any other brute force tool*

## Hints

> What about Web Robots?

## Solve

Go to /robots.txt

the follow to /wall-e.txt that is listed there

## Build

docker build -t  walle . && docker run --rm -p 80:80 -ti walle:latest