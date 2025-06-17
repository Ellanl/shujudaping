#!/bin/bash

content=$(cat "/var/www/html/hosts.txt")

IFS=' ' read -ra arr <<< "$content"

HOST="${arr[0]}"
PORT="${arr[1]}"
USER="${arr[2]}"
PASSWORD="${arr[3]}"

# 1. 预先扫描并添加主机密钥到 known_hosts
if ! grep -q "$HOST" ~/.ssh/known_hosts; then
    echo "添加 $HOST 到 known_hosts..."
    ssh-keyscan -p $PORT -H $HOST >> ~/.ssh/known_hosts 2>/dev/null
    
#     # 验证是否添加成功
    if [ $? -ne 0 ]; then
        echo "错误：无法获取主机密钥！" >&2
        exit 1
    fi
fi

# 2. 执行SSH连接（不再有首次连接提示）
sshpass -p $PASSWORD ssh $USER@$HOST -p $PORT "exit"