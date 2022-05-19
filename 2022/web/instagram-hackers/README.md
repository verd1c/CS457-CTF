# Inst@gram Hackers

**Category:** Web\
**Difficulty:** Medium\
**Author:** gioak\
**Flag:** CS457{Y0u_H4ck3d_th3_h4ck3rs}

## Description

We came across a sketchy website. They don't seem to actually be hackers. Can you bypass their authentication and see what is really going on?

*Note: Do not use nmap or gobuster or any other brute force tool*

## Hints

> If your payload doesn't work, find other ways to form your payload

## Solve

Login with `adm1n' OR 1=1 #` and whatever password

## Build

docker build -t  insta_hackers . && docker run --rm -p 80:80 -it -d insta_hackers:latest