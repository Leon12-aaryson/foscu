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

.audio h4 {
    margin-left: 1.5rem;
}

@media only screen and (min-width: 0px) and (max-width: 400px) {
    .navmargin {
        margin-top: 1rem;
    }

    #projects {
        padding-top: 1rem;
    }

    .expt {
        width: 95%;
    }
}

@media (min-width: 401px) and (max-width: 720px) {
    #projects {
        padding-top: 1px;
    }
}
</style>
<div class="navmargin">
    <div class="newdesign mt-5" id="projects">
        <div class="container">
            <div class="audio">
                <h4 class="ml-4 mt-4">Role of consumers in food safety</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Consumers/Audio_English_food safety hazards_CONSUMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">English</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Consumers/Audio_luganda_food safety hazards_CONSUMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Luganda</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Consumers/Audio_Lumasaba_food safety hazards_CONSUMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Lumasaba</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Consumers/Audio_Runyoro_food safety hazards_CONSUMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Runyoro</h5>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="audio">
                <h4 class="ml-4 mt-4">Role of farmers in food safety</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Farmers/Audio_English_Chemical food contamination_FARMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">English</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Farmers/Audio_luganda_Chemical food contamination_FARMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Luganda</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source
                                src="static/audio/Farmers/Audio_lumasaba_Chemical food contamination_FARMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Lumasaba</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow p-2">
                        <audio controls class="w-100">
                            <source src="static/audio/Farmers/Audio_Runyoro_Chemical food contamination_FARMER ROLE.mp3"
                                type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h5 class="card-title h6 text-muted mt-2">Runyoro</h5>
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