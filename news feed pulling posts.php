<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Felix Mumo News Feed</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            font-family: Arial, sans-serif;
            background:#f4f4f4;
            padding:40px;
        }

        .container{

            max-width:1200px;
            margin:auto;
        }

        .section-title{

            text-align:center;
            margin-bottom:40px;
            color:#222;
            font-size:36px;
        }

        .news-grid{

            display:grid;

            grid-template-columns:
            repeat(auto-fit,minmax(320px,1fr));

            gap:25px;
        }

        .news-card{

            background:white;
            border-radius:12px;
            overflow:hidden;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);

            transition:0.3s;
        }

        .news-card:hover{

            transform:translateY(-5px);
        }

        .news-image{

            width:100%;
            height:220px;
            object-fit:cover;
        }

        .news-content{

            padding:20px;
        }

        .news-content h3{

            font-size:20px;
            margin-bottom:15px;
            color:#111;
        }

        .news-content p{

            color:#555;
            line-height:1.6;
            margin-bottom:20px;
        }

        .read-more{

            display:inline-block;
            padding:10px 18px;
            background:#6077eb;
            color:white;
            text-decoration:none;
            border-radius:6px;
            transition:0.3s;
        }

        .read-more:hover{

            background:#4058d6;
        }

        .loading{

            text-align:center;
            font-size:18px;
            color:#555;
        }

    </style>

</head>

<body>

<div class="container">

    <h1 class="section-title">

        Latest Updates From Felix Mumo

    </h1>

    <div
        id="news-container"
        class="news-grid"
    >

        <div class="loading">

            Loading latest updates...

        </div>

    </div>

</div>

<script>

async function fetchNews() {

    // =========================================
    // REPLACE WITH YOUR RSS FEED URL
    // =========================================

    const rssUrl =
    "https://rss.app/feeds/v1.1/YOUR_FEED_ID.xml";

    // =========================================
    // RSS TO JSON API
    // =========================================

    const apiUrl =
    `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(rssUrl)}`;

    try {

        const response =
            await fetch(apiUrl);

        const data =
            await response.json();

        let output = "";

        data.items.forEach(item => {

            output += `

                <div class="news-card">

                    <img
                        src="${
                            item.thumbnail
                            ? item.thumbnail
                            : 'https://placehold.co/600x400'
                        }"
                        class="news-image"
                    >

                    <div class="news-content">

                        <h3>

                            ${item.title}

                        </h3>

                        <p>

                            ${
                                item.description
                                .replace(/(<([^>]+)>)/gi, "")
                                .substring(0,150)
                            }...

                        </p>

                        <a
                            href="${item.link}"
                            target="_blank"
                            class="read-more"
                        >

                            Read More

                        </a>

                    </div>

                </div>

            `;
        });

        document.getElementById(
            "news-container"
        ).innerHTML = output;

    } catch(error){

        document.getElementById(
            "news-container"
        ).innerHTML = `

            <div class="loading">

                Failed to load updates.

            </div>

        `;

        console.log(error);
    }
}

fetchNews();

</script>

</body>

</html>