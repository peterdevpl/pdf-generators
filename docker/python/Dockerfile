FROM python:3

COPY generators/python /python

RUN apt-get update && \
    apt-get install --no-install-recommends --assume-yes python3-pip libpango-1.0-0 libpangoft2-1.0-0

RUN python3 -m venv venv && \
    /bin/bash venv/bin/activate && \
    pip install weasyprint && \
    weasyprint --info

RUN useradd -ms /bin/bash docker

USER docker

WORKDIR /python

CMD ["./build.sh"]
