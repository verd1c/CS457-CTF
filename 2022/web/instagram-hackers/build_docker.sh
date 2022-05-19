#!/bin/bash
# docker build -t insta_hackers .
# docker run --rm -p 8080:80 -it insta_hackers:latest .

docker build -t  insta_hackers . && docker run --rm -p 80:80 -it -d insta_hackers:latest
