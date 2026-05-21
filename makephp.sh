#!/usr/bin/env bash
# Date: 19 May, 2026
# Description: Make a file that can make a php file
# compile it and run.
# Author: omitida
#

## Help or usage function
# it display what the calling of the script is.
function usage() {
    filename="${0}"
    echo
    echo "Usage: ./${filename} <options> filename"
    echo
    echo "Avaliable Options:"
    echo "-d    : Delete a file."
    echo "-g    : Create a generic php file."
    echo "-h    : Display the help format in this file."
    echo "-i    : interractive mode to try out php commands"
    echo "-r    : Compile and Run a php file"
}

# cpp start writeup
FILE="
<?php
    print \"Hello, World\n\";
?>
"

# creating a php file
function create_file() {
    filename="${1}"
    filext="${filename#*.}"

    # make a file with php extension
    [[ "${filext}" == "${filename}" ]] && filename="${filename}.php"

    if [[ -e "${filename}" ]]; then
        echo "${filename}" "exist."
        printf "Do you want to overwrite it? [y|n]: "
        while read ans; do
            case "${ans,,}" in
                y)
                echo "// ${filename}" > "${filename}"
                printf "${FILE}" >> "${filename}"
                echo "${filename}" "is overwritten."
                break
                ;;
                n) exit 1
                ;;
                *) echo "can only you use 'y' or 'n'."
                continue
                ;;
            esac
        done
    else
        echo "// ${filename}" > "${filename}"
        echo "${FILE}" >> "${filename}"
    fi
}


if [[ "${#}" != 2 ]]; then
    usage
fi

optstring="d:g:r:R:i:h"

while getopts "${optstring}" opt; do
    case "${opt}" in

        d)
        filename="${OPTARG,,}"
        for file in $(ls); do
            if [[ "${filename}" = "${file}" ]]; then
                printf "Do you want to delete ${file}? [y|n]: "
                while read ans; do
                    case "${ans,,}" in
                        y) rm "${file}"
                           exit 0;;
                        n) break;;
                        *) printf "Can only use 'n' for no, and 'y' for yes.\n"
                        continue
                        ;;
                    esac
                done
            fi
        done

        ;;
        g)
          filename="${OPTARG,,}"
          create_file "${filename}"
          ./"${0}" -r "${filename}"
        ;;
        h) usage
           exit 1
        ;;

        r)
            filename="${OPTARG}"
            php "${filename}"
        ;;
        i)
            php -a
        ;;
        *.*);;
    esac
done
