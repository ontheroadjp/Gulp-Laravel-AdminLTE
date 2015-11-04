#!/bin/bash
set -e
content_dir=$(cd $(dirname $BASH_SOURCE); pwd)

set -x
cd "$content_dir"
git add -A
git commit -m "backup at $(date "+%Y-%m-%d %T")" || true
git push -f origin bk
