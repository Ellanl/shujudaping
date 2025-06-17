#!/bin/bash

# 启动cron服务
service cron start




# 启动Apache服务
apache2ctl -D FOREGROUND