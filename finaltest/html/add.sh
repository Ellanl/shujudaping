#!/bin/bash

# 监控的文件路径
TARGET_FILE="/var/www/html/hosts.txt"
# 文件修改后要执行的命令
COMMAND_TO_RUN="/var/www/html/script.sh"

# 开始监控
inotifywait -m -e close_write --format "%w%f" "$TARGET_FILE" |
while read -r changed_file; do
  if [[ "$changed_file" == "$TARGET_FILE" ]]; then
    echo "检测到文件修改: $TARGET_FILE"
    eval "$COMMAND_TO_RUN"
  fi
done