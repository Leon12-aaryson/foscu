<?php
$title = "FOSCU";
include "header.php";
?>

<style>
.expt {
    padding: 2rem;
}

.newdesign {
    padding: 1rem;
}

.newdesign a {
    color: #F79321;
    text-decoration: none;
}

.newdesign h5:hover {
    transition: all .3s;
    transform: scale(.8);
}

.newdesign .container .row {
    justify-content: center;
    position: relative;
    margin: auto;
    text-align: center;
}

.cardtxt {
    width: 80%;
    margin: auto;
    align-items: center;
}

.newdesign .container .row img {
    justify-content: center;
    margin: auto;
    max-width: 250px;
}

.newdesign .container .row .card {
    border-radius: .4rem;
}

#projects {
    padding-top: 6.8rem;
}

@media only screen and (min-width: 0px) and (max-width: 400px) {
    .navmargin {
        margin-top: 1rem;
    }

    .expt {
        width: 95%;
    }
}
</style>
<div class="navmargin">
    <div class="newdesign mt-5" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://youtube.com/embed/ckqaq-Bd1Yo?si=dnQVptnFaTg4QyEN"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div><div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/DWUmASq_9V0?si=_sQARHbkV_OXkMSN"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/QQ7G1vUicYc?si=8YHwZ9Tt1nu88W-G"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/RMH5hFnoAss?si=7HEEpN8eFjU8bWPM"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/gNHJWofjhss?si=TSdkaanhLhNO_iK9"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/qpcW8aVOPpc?si=DN68_oPyNxclyaOR"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://youtube.com/embed/i83tgttUB2c?si=LYWMYwQBPSsC4kcg" title="YouTube video player"
                            frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://youtube.com/embed/3OCuWPzgsTU?si=WfRnpMmAz74eLayY" title="YouTube video player"
                            frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <iframe width="auto" height="auto" class="card-img-top"
                            src="https://www.youtube.com/embed/8ATGgP5VDzc?si=gVL8iUJoJ-VUxgp1"
                            title="YouTube video player" frameborder="0"
                            allow="geolocation; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function redirectToSite() {
    var url = "infovid.php";
    window.open(url, '_blank');
}
</script>
<?php
include "footer.php";