# Loophole — official container image (issue #29)
# Single file, stdlib only: no pip install, no extra dependencies.
# Build:  docker build -t loophole .
# Run:    docker run --rm -v "$PWD:/src" loophole scan /src
FROM python:3.12-slim

WORKDIR /app

COPY loophole.py .

RUN useradd --create-home --uid 10001 loophole \
    && chown -R loophole:loophole /app

USER loophole

ENTRYPOINT ["python3", "loophole.py"]
