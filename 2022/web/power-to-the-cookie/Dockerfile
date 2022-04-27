FROM python:3.8-slim

RUN useradd -m ctf

WORKDIR /nino

COPY src/ .
COPY flag /nino/flag

ENV PORT 1337
RUN apt update -y
RUN pip3 install --upgrade --no-cache-dir -r requirements.txt

RUN chown -R root:ctf /nino && \
    chmod 750 /nino /nino/app.py

USER ctf

CMD ["/usr/local/bin/python", "/nino/app.py"]

EXPOSE 1337