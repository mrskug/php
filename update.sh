#!/bin/bash
git add *
git commit -m "update"
git push
ssh holmberc@penti.sit.fi /home/h/holmberc/html/php/hook.sh
