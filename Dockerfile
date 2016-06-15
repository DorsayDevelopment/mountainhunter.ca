FROM wordpress:latest

ADD . /data/mountainhunter/wp-content/themes/mountainhunter/

RUN sudo chmod -R 777 /data/mountainhunter