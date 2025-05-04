#!/bin/bash
source ./.env
docker build -t ghcr.io/ncsuarc/website:latest .
docker push ghcr.io/ncsuarc/website:latest
