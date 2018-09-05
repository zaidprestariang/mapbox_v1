git rebase -i origin/master
git rm 'Location History.json'
git commit --amend --allow-empty
git rebase --continue
git push origin master

