$(document).ready(function(){

    let newsObj1= {
        link: "https://hk.news.yahoo.com/%E8%AD%A6%E6%96%B9%E5%9C%A8%E5%BD%8C%E6%95%A6%E9%81%93%E8%88%87%E4%BA%9E%E7%9A%86%E8%80%81%E8%A1%97%E4%BA%A4%E7%95%8C%E6%96%BD%E6%94%BE%E5%82%AC%E6%B7%9A%E5%BD%88-155254061.html",
        preview: "https://newsstatic.rthk.hk/images/mfile_1495343_1_L_20191130235911.jpg",
        title: "警方在彌敦道與亞皆老街交界施放催淚彈",
        time: "2019-11-30 HKT 23:52",
        source_name: "RTHK",
        desc: "有市民晚上在港鐵太子站外聚集，紀念8.31事件3個月，防暴警員多次在太子站外彌敦道，驅散聚集人士，並清理多處路障\。\
        \
        部分人轉到旺角站附近，C1出口有人縱火，消防員到場處理\。\
        有市民晚上在港鐵太子站外聚集，紀念8.31事件3個月，防暴警員多次在太子站外彌敦道，驅散聚集人士，並清理多處路障。"
    };

    let newsObj2={
        link: "https://www.news.com.au/world/breaking-news/hk-police-fire-tear-gas-at-protesters/news-story/e9af9d6e96486024a49acd50fed07db0",
        preview: "https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/11/1862/1048/AP19306376739276.jpg?ve=1&tl=1",
        title: "HK police fire tear gas at protesters",
        time: "2019-12-1 HKT 20:11",
        source_name: "news.com.au",
        desc: "Anti-government protesters rallying in Hong Kong have been dispersed with tear gas after a lull in violence on the streets of the financial hub."
    }

    let newsObjArray=[];
    
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyC8jrdGczSxRcyAOYhAPa075eODAtz1zj8",
        authDomain: "hktgmap-nfo.firebaseapp.com",
        databaseURL: "https://hktgmap-nfo.firebaseio.com",
        projectId: "hktgmap-nfo",
        storageBucket: "hktgmap-nfo.appspot.com",
        messagingSenderId: "1050068801001",
        appId: "1:1050068801001:web:401f5df28a60fa15516778"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    let db = firebase.firestore();
    db.collection("news").orderBy("time", "desc").limit(10)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {debugger;
            // doc.data() is never undefined for query doc snapshots
            // console.log(doc.id, " => ", doc.data());
            newsObjArray.push(doc.data());
        });
    }).then(()=>{
        newsObjArray.forEach(newsObj => {
            let template = `
            <div class='each-news'>
                <a style="display:flex;" href='${newsObj.url}'>
                    <img class="news-img" src="${newsObj.preview}">
                </a>
                <div class='each-news--text-wrapper'>
                    <a href='${newsObj.url}' class='each-news--title'>
                        ${newsObj.title}
                    </a>
                    <div class='each-news--metadata'>
                        <div class='moment-this time'>
                            2019-11-30 HKT 23:52
                        </div>
                        |
                        <div class='source'>
                            <a href='${newsObj.url}'>${newsObj.source_name}</a>
                        </div>
                    </div>
                    <a href='${newsObj.url}' class='each-news--content'>
                        ${newsObj.desc}
                    </a>
                    <a href="${newsObj.url}" class='each-news--read-more'>
                    (Read more...)
                    </a>
                </div>
            </div>
            `;
            $('.news-inner-wrapper').append($(template));
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
})
