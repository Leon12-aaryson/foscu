<?php
$title = "FOSCU";
include "header.php";
require "dashboard/dbconn.php";

// for upcoming events table
$sql = "SELECT * FROM events ORDER BY eventdate DESC";
$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$admit = $querry->fetchAll(PDO::FETCH_OBJ);


// for recent events table
$sql = "SELECT * FROM recent  ORDER BY eventdate DESC LIMIT 4";
$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$parent = $querry->fetchAll(PDO::FETCH_OBJ);

?>
<style>
    .feed .links {
        overflow: auto;
        float: left;
        max-height: 30%;
        position: relative;
        margin-left: .2px;
        padding: 1rem;
    }


    .accordion-body {
        padding: 0;
    }

    .table {
        margin-bottom: 0;
    }

    .table p.muted {
        margin-bottom: 0.2rem;
    }

    .main {
        background: linear-gradient(to top, rgba(0, 256, 0, .4), rgba(0, 0, 0, .4) 50%), url('static/images/home.png');
        background-size: cover;
        height: 90vh;
        object-fit: cover;
        padding: 2rem;
    }

    .feed {
        height: 90vh;
    }

    .carousel-indicators [data-bs-target] {
        width: 14px;
        height: 14px;
        background-color: orange;
        border-radius: 50%;
    }

    @media (max-width: 500px) {
        .main {
            background: linear-gradient(to top, rgba(0, 256, 0, .4), rgba(0, 0, 0, .4) 50%), url('static/images/home.png');
            background-size: cover;
            /* height: 90vh; */
            object-fit: cover;
            padding: 2rem;
        }

        .feed {
            padding: .5rem;
            height: auto;
        }
    }
</style>
<div class="navmargin">
    <div class="cont">
        <div class="main">
            <div class="maintxt">
                <h3>Food Safety Coalition Uganda (FoSCU)</h3>
                <h4>'Safe food for all by all'</h4>
                <p>FoSCU is a family of local stakeholders in Uganda's agri-food system (input suppliers, producers,<br>
                    food traders, consumers, knowledge brokers,
                    communication experts, advocacy actors, and regulators)<br> jointly working with a common vision of
                    a society
                    where consumers <br>sustainably access safe food.

                </p>
            </div>
        </div>
        <div class="feed">
            <div class="feed1">
                <div class="tweet">
                    <h3>Food safety News</h3>
                    <a class="twitter-timeline" href="https://twitter.com/foscu23?ref_src=twsrc%5Etfw" data-width="100%"
                        data-height="300" data-tweet-limit="3" data-chrome="nofooter noborders"></a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                </div>
            </div>
            <div class="contact">
                <h3>Relevant links</h3>
                <div class="links">
                    <a href="https://www.brsmeas.org/" target="_blank">
                        <h6>Basel, Rotterdam and Stockholm Conventions</h6>
                    </a>
                    <a href="https://www.fao.org/fao-who-codexalimentarius/codex-texts/dbs/pestres/en/" target="_blank">
                        <h6 class="bc2">CODEX</h6>
                    </a>
                    <a href="https://food.ec.europa.eu/plants/pesticides/eu-pesticides-database_en" target="_blank">
                        <h6>EU Pesticides Database </h6>
                    </a>
                    <a href="https://www.fao.org/agroecology/home/en/" target="_blank">
                        <h6 class="bc2">FAO Agroecology</h6>
                    </a>
                    <a href="https://www.fao.org/food-safety/en/" target="_blank">
                        <h6>FAO Food Safety and Quality</h6>
                    </a>
                    <a href="https://www.fao.org/plant-production-protection/about/NSP-division" target="_blank">
                        <h6 class="bc2">FAO Plant Production and Protection</h6>
                    </a>
                    <a href="https://www.fao.org/faolex/background/en/" target="_blank">
                        <h6>FAOLEX Database</h6>
                    </a>
                    <a href="https://www.fao.org/faostat/en/#data" target="_blank">
                        <h6 class="bc2">FAOSTAT</h6>
                    </a>
                    <a href="https://www.who.int/data/gho/samples/food-cluster-diets" target="_blank">
                        <h6>Food Cluster Diets</h6>
                    </a>
                    <a href="https://www.ifoam.bio/" target="_blank">
                        <h6 class="bc2">IFOAM Organic</h6>
                    </a>
                    <a href="https://infonet-biovision.org/" target="_blank">
                        <h6>Infonet-biovision</h6>
                    </a>
                    <a href="https://www.agriculture.go.ug/" target="_blank">
                        <h6 class="bc2">MAAIF</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="car">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- <div class="carousel-item active">
                    <img src="static/images/feath.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>STAKEHOLDER ENGAGEMENT</h5>
                        <p>World Food Safety Day, Gulu City</p>
                    </div>
                </div> -->
                <div class="carousel-item active">
                    <img src="static/images/newimg.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MBALE GOOD FOOD PARLIAMENT</h5>
                        <p>FoSCU keynote on chemical contamination of food</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/images/feath1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FOOD SAFETY ENGAGEMENT</h5>
                        <p>FoSCU Workshop in Kampala</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/images/foscu1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>FOOD SAFETY CAPACITY BUILDING</h5>
                        <p>Training workshop for FoSCU members in Kampala</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <section class="body wrbod">
        <div class="act">
            <h3>FoSCU Activities</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Upcoming Events
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped borderless">
                                <?php foreach ($admit as $samp): ?>
                                    <tr>
                                        <td>
                                            <h6>
                                                <?php echo $samp->eventname; ?>
                                            </h6>
                                            <?php
                                            $date = new DateTime($samp->eventdate);
                                            $datedisp = $date->format('d F, Y'); // Format: 14 July, 2024
                                            $date1 = new DateTime($samp->enddate);
                                            $datedisp1 = $date1->format('d F, Y');
                                            ?>
                                            <p class="muted"><Span>
                                                    <?php echo $datedisp; ?> to
                                                    <?php echo $datedisp1; ?>
                                                </Span></p>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Recent Events
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped borderless">
                                <?php foreach ($parent as $samp): ?>
                                    <tr>
                                        <td>
                                            <h6>
                                                <?php echo $samp->eventname; ?>
                                            </h6>
                                            <?php
                                            $date = new DateTime($samp->eventdate);
                                            $datedisp = $date->format('d F, Y'); ?>
                                            <p class="muted"><Span>
                                                    <?php echo $datedisp; ?>
                                                </Span></p>
                                        </td>
                                    </tr>

                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="members">
            <h3>FoSCU Members</h3>
            <div class="memimgs">
                <a href="https://rudmec.org/" target="_blank"><img src="static/images/log.png" alt="">
                </a>
                <a href="#"><img src="static/images/log1.png" alt=""></a>
                <a href="#"><img src="static/images/log2.png" alt=""></a>
                <a href="https://unadaug.org/" target="_blank"><img src="static/images/log3.png" alt=""></a>
                <a href="https://www.afirduganda.org/" target="_blank"><img src="static/images/log4.png" alt=""></a>
                <a href="https://www.consentug.org" target="_blank"><img src="static/images/log6.png" alt=""></a>
                <a href="https://www.rikolto.org/" target="_blank"><img src="static/images/log7.png" alt=""></a>
                <a href="https://krcuganda.org/" target="_blank"><img src="static/images/log8.png" alt=""></a>
                <a href="https://www.rucid.org/" target="_blank"><img src="static/images/log9.png" alt=""></a>
                <a href="https://aupwae.net/" target="_blank"><img src="static/images/log5.png" alt=""></a>
                <a href="https://unacoh.org/" target="_blank"><img src="static/images/log10.png" alt=""></a>
                <a href="https://dimensionalpictures.com" target="_blank"><img src="static/images/dime.png" alt=""></a>
                <a href="https://dimensionalpictures.com" target="_blank"><img src="static/images/kulika.png"
                        alt=""></a>
                <a href="https://www.croplifeug.org/" target="_blank"><img src="static/images/log12.png" alt=""></a>
                <a href="https://ugandaagribusinessalliance.com/" target="_blank"><img src="static/images/agrib.png" alt=""></a>
                <a href="http://unffe.org.ug/" target="_blank"><img src="static/images/logo13.png" alt=""></a>
            </div>
        </div>
        <div class="partner">
            <h3>FoSCU Partners</h3>
            <a href="https://www.biovision.ch/en/" target="_blank"><img src="static/images/biov.png" alt=""></a>
            <div class="contact card">
                <h3>Contact Us</h3>
                <h5>SECRETARIAT</h5>
                <h6>Email: info@foscu.org</h6>
                <h6>Phone: +256 779864929 / 0772 502441</h6>
            </div>
        </div>
    </section>
</div>

<?php
include "footer.php";