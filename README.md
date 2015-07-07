# blacksmith-contracts

Add to any existing git project with the following merge statements.

```
git remote add contracts https://github.com/ehlovader/blacksmith-contracts
git remote set-url --push contracts no-pushing

git pull -s recursive -X ours --no-commit --no-squash contracts laravel5
git reset
```