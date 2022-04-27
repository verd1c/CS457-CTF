# Power to the cookie

**Category:** Web\
**Difficulty:** Easy\
**Author:** gioak\
**Flag:** CS457{c00k1e_1s_th3_p4th}

## Description

I developed an Directory Listing that serves only one page, since people can't click they can't open files! It is safe, right?

Note: Do not use nmap or gobuster or any other brute force tool

## Solve

The challenge has a cookie named `path` that contains in `Lw==` that is `/` decoded in base64.

Replace its value with `L2ZsYWc=` and you can access `/flag`