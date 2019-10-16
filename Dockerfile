FROM php:7.3

RUN mkdir /workdir
COPY ./in-array.php /workdir
WORKDIR /workdir

ENTRYPOINT ["php", "/workdir/in-array.php"]
