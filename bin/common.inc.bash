#!/usr/bin/env bash

set -eu

function dockerPhpExec() {
    docker exec --interactive --tty --user "$(id -u):$(id -g)" sg_php_whoz_off_php "$@"
}
