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
    echo "-b:   : Create a Bootstrap 4 project directory."
    echo "-c    : Create a CSS file."
    echo "-d    : Delete a file."
    echo "-g    : Create a generic php file."
    echo "-h    : Display the help format in this file."
    echo "-i    : interractive mode to try out php commands."
    echo "-p    : create a php project directory with all the needed files."
    echo "-r    : Compile and Run a php file."
}

# php start writeup
FILE="
<?php
    print \"Hello, World\n\";
"

# CSS template
CSS="
* {

}
"


# Bootstrap 5 HTML template
BOOTSTRAP5_HTML="
<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <!-- Required meta tags always come first -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <title>${filename}</title>

        <!-- Bootstrap CSS -->
        <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
        >
    </head>
    <body>
        <?php
            echo \"Hello, World\n\";
        ?>

        <!-- Bootstrap JS. -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
        </script>
    </body>
</html>
"


# Bootstrap 4 HTML template
BOOTSTRAP4_HTML="
<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <!-- Required meta tags always come first -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <title>${filename}</title>

        <!-- Bootstrap CSS -->
        <link
            rel=\"stylesheet\"
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"
        />
    </head>
    <body>
        <?php
            echo \"Hello, World\n\";
        ?>

        <!-- jQuery first, then Bootstrap JS. -->
        <script src=\"https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js\"></script>

    </body>
</html>
"


HTML="
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>${filename}</title>
        <!--link rel=\"\" href=\"\"-->
    </head>
    <body>
        <?php

        ?>
        <!--script src=\"\"></script-->
    </body>
</html>
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
        while read -r -e ans; do
            case "${ans,,}" in
                y)
                echo "${FILE}" > "${filename}"
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
        echo "${FILE}" >> "${filename}"
    fi
}


if [[ "${#}" != 2 ]]; then
    usage
fi

optstring="b:c:d:g:r:R:i:l:p:h"

while getopts "${optstring}" opt; do
    case "${opt}" in

        b)
            filename="${OPTARG}"
            file_extension="${filename##*.}"
            [[ "${file_extension}" != "html" ]] && filename="${filename%.*}.html"

            while read -r -e -p "Bootstrap Version [4 or 5]? " ans; do
              case "$ans" in
                4) echo "${BOOTSTRAP4_HTML}" > "${filename}"; exit 0;;
                5) echo "${BOOTSTRAP5_HTML}" > "${filename}"; exit 0;;
                *) printf "Can only use '4' for Bootstrap 4, and '5' for Bootstrap 5.\n"
                continue
                ;;
              esac
            done
        ;;

        c)
            filename="${OPTARG}"
            file_extension="${filename##*.}"
            [[ "${file_extension}" != "css" ]] && filename="${filename%.*}.css"
            echo "${CSS}" > "${filename}"
            exit 0
        ;;

        d)
        filename="${OPTARG}"
        file_extension="${filename##*.}"
        for file in *."${file_extension}"; do
            if [[ "${filename}" = "${file}" ]]; then
                while read -r -e -p "Do you want to delete ${file}? [y|n]: " ans; do
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
          filename="${OPTARG^}"
          create_file "${filename}"
          ./"${0}" -r "${filename}"
        ;;
        h) usage
           exit 1
        ;;
        l)
            filename="${OPTARG}"
            file_extension="${filename##*.}"
            [[ "${file_extension}" != "html" ]] && filename="${filename%.*}.html"
            echo "${HTML}" > "${filename}"
        ;;

        r)
            filename="${OPTARG}"
            php "${filename}"
        ;;
        i)
            php -a
        ;;
        p)
            project_name="${OPTARG}"
            mkdir -p "${project_name}/public"
            cd "${project_name}/public" || exit 1
            # create_file "index.php"
            echo "${BOOTSTRAP5_HTML}" > "index.php"
            echo "${BOOTSTRAP5_HTML}" > "${project_name%.*}.php"
            # make all the other files and directories
            mkdir images css js
            touch css/main.css
            touch js/main.js
        ;;
        *.*);;
    esac
done
