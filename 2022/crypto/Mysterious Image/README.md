# Mysterious Image

**Category:** Crypto\
**Difficulty:** Very Easy\
**Author:** gioak\
**Flag:** CS457{Base64_1s_w1d3ly_us3d}

## Description

I copied the source code of an HTML website but this base64 encoding of an image does not seem to produce an image! What could it be?

```xml
<img src="data:image/png;base64, Q1M0NTd7QmFzZTY0XzFzX3cxZDNseV91czNkfQ==" alt="Red dot" />
```

## Solve

Base64 decode the data