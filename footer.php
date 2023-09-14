<style>
    .footer {
        background: linear-gradient(to bottom, rgba(0, 256, 0, .4) 60%, rgba(0, 0, 0, .4) 40%), url('static/images/foot.jpg');
        background-size: cover;
        height: 60vh;
        object-fit: cover;
        padding: 2rem;
        /* margin-top: 3rem; */
    }

    .footer .foot {
        text-align: center;
    }

    .footdiv {
        display: grid;
        grid-template-columns: auto auto;
        width: 50%;
        text-align: center;
        position: relative;
        margin: auto;
        gap: 1rem;
    }


    .foot .footdiv img {
        height: 150px;
        width: auto;
    }

    @media (max-width: 550px) {
        .footer {
            display: none;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .4), rgba(0, 0, 0, .4) 50%), url('static/images/foot.jpg');
            background-size: cover;
            height: 80vh;
            object-fit: cover;
            padding: 2rem;
        }

        .footdiv {
            display: grid;
            grid-template-columns: auto;
            text-align: center;
            position: relative;
            margin: auto;
            gap: 1rem;
        }

        .footer img {
            width: 80%;
        }
    }
</style>
<div class="footer">
    <div class="foot">
        <div class="footdiv">
            <div class="div">
                <img src="static/images/logo.png" alt="">
            </div>
            <div class="div2">
                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/4BoJAs_Qn5c" title="YouTube video player" frameborder="0" allow="geolocation; accelerometer;
             autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="static/styles/js/index.js"></script>
<script src="static/styles/js/progress.js"></script>

<!-- MDB -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>