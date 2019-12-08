# tgmap.github.io
Hong Kong Tear Gas Mapping

# FIRST TIME SETUP
First time install Semantic UI:
```sh
$ npm install semantic-ui --save
$ cd semantic/
$ gulp build
```

#Run the server
1) Git Clone laradock to the same parentt folder of tgmap-main
```
git clone https://laradock.io/
```
Folder structure:
/ Folder
------- / Laradock
------- / tgmap-main

2) Modify the `.env` file from laradock folder, change the `APP_CODE_PATH_HOST=` to `APP_CODE_PATH_HOST=../tgmap-main` from the General Setup

3) go to laradock folder and run ```$ docker-compose up -d nginx workspace ```

4) tada :) go to localhost:8000