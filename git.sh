#!/bin/bash
echo "Hola mundo" 
# echo is similar to print statement.
git config --global user.name '' 
git config --global user.email 'lucas15redes@gmail.com'
git config --global color.ui true
git config --global pull.rebase true
git config --global credential.username "66666"
git branch --set-upstream-to=origin/master master

git config --global alias.lodg 'log --oneline --decorate --graph'
git config --global alias.conflict 'diff --name-only --diff-filter=U'
# git config --global --get-regexp alias
# git config --global --unset alias.lodg
git config --global --list
# git config --global --unset user.email
read -p "Accepting the offer? (y/n) " answer