#!/bin/bash
docker build -t website . && docker run --name website --network=host website
docker push ghcr.io/ncsuarc/website:latest
