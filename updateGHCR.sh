#!/bin/bash
source ./.env
echo $GITHUB_TOKEN | docker login ghcr.io -u $GITHUB_USER --password-stdin
docker build -t ghcr.io/ncsuarc/website:latest .
docker push ghcr.io/ncsuarc/website:latest

