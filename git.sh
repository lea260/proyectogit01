#!/bin/bash
echo "Hola mundo" 
# echo is similar to print statement.
<<<<<<< HEAD
git config --global user.name 'Lucas Clavijo' 
git config --global user.email 'lucas15redes@gmail.com'
git config --global color.ui true
git config --global pull.rebase true
git config --global credential.username "Novakronoo"
git branch --set-upstream-to=origin/master master
=======
git config --global user.name 'Thomas Villagran' 
git config --global user.email 'liantorrio@gmail.com'
git config --global color.ui true
git config --global pull.rebase true
git config --global credential.username "TexasXThomas"
# git branch --set-upstream-to=origin/master master
>>>>>>> 4d3af39 (archivonuevo)
git config --global alias.lodg 'log --oneline --decorate --graph'
git config --global alias.conflict 'diff --name-only --diff-filter=U'
# git config --global --get-regexp alias
# git config --global --unset alias.lodg
git config --global --list
# git config --global --unset user.email
read -p "Accepting the offer? (y/n) " answer