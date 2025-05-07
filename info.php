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
                    <div class="card shadow p-2">
                        <img src="static/images/agric.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="infovid.php" target=""
                                    rel="noopener noreferrer">Videos</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                Dive into the world of sustainable farming with Foscu! Watch, learn, and join us in
                                cultivating a greener tomorrow.
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/analyze.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="research.php" target="" rel="noopener noreferrer">Research briefs</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/female.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="reports.php" target="" rel="noopener noreferrer">Reports</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/edu2.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="posters.php" target="" rel="noopener noreferrer">Posters</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/female.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="#" target="" rel="noopener noreferrer">Policy briefs</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/female.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="papers.php" target="" rel="noopener noreferrer">Articles</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/edu6.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="#" target="" rel="noopener noreferrer">e-learning</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div><div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/posters/Poster5.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="audio.php" target="" rel="noopener noreferrer">Audio</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-2">
                        <img src="static/images/edu7.jpg" alt="">
                        <div class="cardtxt">
                            <h5>
                                <a href="#" target="" rel="noopener noreferrer">Relevant sites</a>
                            </h5>
                            <!-- <h6 class="fw-normal text-muted">
                                
                            </h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";