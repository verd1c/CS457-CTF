FROM python:3.8-slim

RUN useradd -m ctf

WORKDIR /theo0k

COPY src/ .

ENV PORT 1337
# RUN apt update -y

RUN chown -R root:ctf /theo0k && chmod 750 /theo0k

USER ctf

CMD ["python", "-m", "http.server", "1337"]

EXPOSE 1337