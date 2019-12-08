<style>
    .main-body {
        background: linear-gradient(0deg,rgb(27, 25, 27),rgba(39, 37, 38, 0.29)), url('../views/news/bg.jpg')!important;
        background-size:cover!important;
        background-position: center!important;
    }
    .main-body * {
        color: white;
    }
    .news-wrapper{
        margin: auto;
        margin-top: 70px;
        margin-bottom: 70px;
        max-width: 1170px;
    }
    .news-inner-wrapper{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .news-inner-wrapper .each-news{
        display: flex;
        width: 100%;
        max-width: 600px;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .news-img{
        width: 300px;
        height: auto;
        max-height: 300px;
        object-fit: cover;
        margin-right: 20px;
    }
    .each-news--title{
        font-size:2rem;
        font-weight:600;
        line-height: 2.5rem;
    }
    .each-news--text-wrapper{
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .each-news--metadata, .each-news--metadata *{
        display: inline;
        font-size: 0.7rem;
        font-weight: 300;
    }
    .each-news--metadata> :first-child{
        margin-right: 5px;
    }
    .each-news--metadata> :last-child{
        margin-left: 5px;
    }
    .each-news--content{
        margin-top: 5px;
    }
    .each-news--read-more{
        float:right;
    }
    @media all and (max-width: 768px){
        .news-inner-wrapper .each-news {
            flex-wrap: wrap;
        }
        .news-inner-wrapper .each-news > *{
            width: 100%;
        }
        .news-img{
            width: 100%;
            margin-right: unset;
        }
    }
</style>
<script src="http://<?php echo $_SERVER['HTTP_HOST'];?>/views/news/news.js"></script>
<div class='news-wrapper'>
    <div class='news-inner-wrapper'>
    <!-- to be appended -->
    </div>
</div>
