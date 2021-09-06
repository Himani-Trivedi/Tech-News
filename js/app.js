
function zeros(num) {
    s = num + "";
    if (s.length < 2) {
        s = "0" + s;
    }
    return s;
}

async function news2() {

    const d = new Date();
    // console.log(d.getFullYear()+'-' + zeros((d.getMonth()+1)) + "-" + zeros(d.getDate()));
    date = "from=" + d.getFullYear() + '-' + zeros((d.getMonth() + 1)) + "-" + zeros(d.getDate());
    // console.log(date)

    let url = "https://newsapi.org/v2/top-headlines?category=technology&language=en&"
        + date +
        "&counrty=in&sortBy=popularity&apiKey=247bfd79d6ec4a01a33c54ed53bcfe33";

    urls = await fetch(url);

    news = await urls.json();

    return news;

}

news = news2();


news.then((data) => {
    // console.log(data);
    art = data.articles;
    console.log(art);
    html = "";

    for (t in art) {
        console.log(art[t].title);
        console.log(art[t].description);
        console.log(art[t].urlToImage);
        console.log(art[t].url);


        html += ` <div class="card m-3 d-flex"
        style="width: 80%; background-color: #63cbd3; color: #677289; font-family: 'Newsreader', serif; font-size: 20px;">
        <div class="card-body">
            <h5 class="card-title" id="title" style="font-size: 25px; font-weight: bolder;">${art[t].title}</h5>
            <img src="${art[t].urlToImage}" class="card-img-top" alt="" id="image">
            <p class="card-text" id="desc">${art[t].description}</p>
            <a href="${art[t].url}" class="btn" style="font-weight: bold; color: #677289; font-size: 25px;" target="_blank">Read More</a>
        </div>
    </div>`;

    }

    document.getElementById('letter').innerHTML += html;

})

