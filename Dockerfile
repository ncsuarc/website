FROM ubuntu:latest
RUN apt update -y && apt install hugo -y
WORKDIR /app
COPY . .
EXPOSE 1313
CMD ["hugo", "server", "--bind", "0.0.0.0"]
