FROM ubuntu:20.04

COPY generators/ubuntu /ubuntu

RUN apt-get update && \
    apt-get install --no-install-recommends --assume-yes \
        ca-certificates curl fontconfig libfreetype6 libjpeg-turbo8 \
        libpng16-16 libx11-6 libxcb1 libxext6 libxrender1 ttf-dejavu xfonts-75dpi xfonts-base \
        libgif7 libjpeg8 liblcms2-2 libtiff5 libxml2

RUN curl -L -o wkhtml.deb "https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.focal_amd64.deb" && \
    dpkg -i wkhtml.deb && \
    rm -f wkhtml.deb

RUN curl -L -o prince.deb "https://www.princexml.com/download/prince_15.3-1_ubuntu20.04_amd64.deb" && \
    dpkg -i prince.deb && \
    rm -f prince.deb

RUN useradd -ms /bin/bash docker

USER docker

WORKDIR /ubuntu

CMD ["./build.sh"]
