# tgmap.github.io
Hong Kong Tear Gas Mapping

# Inputting Data for News Section
1. go to https://console.firebase.google.com/ and click `hktgmap-info`, if you couldn't find the project, make sure you login with the correct email, or find Sixmous
[![N|Solid](https://i.imgur.com/o0VzMZ4.png)](https://console.firebase.google.com/)
2. Follow the following image [![N|Solid](https://i.imgur.com/yj1Kcvd.png)](https://console.firebase.google.com/)
3. Follow the following pattern to add a new news
Document ID --> Click Auto-ID
- `url` --> String, URL of news
- `preview` --> String, URL of the image, if the news provider doesn't supply, you can make one and upload to imgur.com then get the image url, the URL usually end with .jpg or .png
- `title` --> String, Title of the news
- `time` --> timestamp, the website will based on this info to sort from new to old
- `source_name` --> String, Title of the news company
- `desc` --> String, First paragraph of the news (Supports Multiple Lines)
- Example: [![N|Solid](https://i.imgur.com/tWs8J86.png)](https://console.firebase.google.com/)
4. Click `Save` at right bottom corner, the thing will be stored to the database, if there is any modification, just modify on the right of the page.
5. Refresh hktgmap.info/news, _tada_!!!