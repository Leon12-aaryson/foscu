<?php
$title = "FOSCU focus";
include "header.php";
?>
<style>
    .main {
        background: url('static/images/home1.png');
        background-size: cover;
        height: 90vh;
        object-fit: cover;
        padding: 2rem;
    }

    .focus {
        background: linear-gradient(to top, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2) 50%), url('static/images/tea.jpg');
        background-size: cover;
        object-fit: cover;
        padding: 2rem;
    }

    .foctxt {
        width: 80%;
    }

    .foctxt i {
        color: orange;
        font-size: 5rem;
    }

    @media only screen and (min-width: 0px) and (max-width: 400px) {
        .foctxt {
            width: 100%;
        }

        .foctxt i {
            font-size: 3rem;
        }

        .main {
            /* background: url('static/images/home1.png'); */
            height: 155vh;
            padding: 1rem;
        }
    }

    @media (min-width: 401px) and (max-width: 550px) {
        .foctxt {
            width: 90%;
        }

        .foctxt i {
            font-size: 3rem;
        }

        .main {
            /* background: url('static/images/home1.png'); */
            height: 150vh;
            padding: 1rem;
        }
    }
    @media (min-width: 551px) and (max-width: 1024px) {
        .foctxt {
            width: 90%;
        }

        .foctxt i {
            font-size: 3rem;
        }

        .main {
            /* background: url('static/images/home1.png'); */
            height: 120vh;
            padding: 1rem;
        }
    }
</style>
<div class="navmargin">
    <div class="main">
        <div class="foctxt">
            <p>Our existence and direction is guided by the question:</p>
            <h3><i class='bx bxs-quote-alt-left'></i>
                How can contamination-free food be realised
                in Uganda's agri-food system?<br>
                <i class='bx bxs-quote-alt-right'></i>
            </h3>
            <h5>At FoSCU we acknowledge at least four broad categories of food safety hazards: <b>Chemical, Biological, Physical and Allergenic. </b>
                Of these, chemical contamination is the most commonly spread across different value chain nodes. From a broader technical perspective, FoSCU
                promotes the concept of <b>Integrated Pest Management(IPM)</b> as the most realistic vehicle of transitioning to safe food from current food production
                (predominantly conventional), towards the desired food production (predominantly agrocecological measures), taking into consideration sustainable
                management of the high burden of the crop and animal pests, vectors and diseases. </h5>
            <img src="static/images/bar.png" alt="">
        </div>
    </div>
    <div class="lower">
        <p>We are strategically focused by
                a broad vision and a resounding motto that reminds us that we all have a RIGHT to consume
                and a RESPONSIBILITY to contribute to realization of safe food!!</p>
    </div>
    <div class="focus">
        <div class="focus1">
            <div class="vistxt">
                <h3>Our Vision</h3>
                <p>A society where all people sustainably
                    access safe food
                </p>
            </div>
            <div class="vistxt">
                <h3>Our Mission</h3>
                <p>To harness partnerships towards promoting
                    sustainable food safety for all consumers
                    in Uganda and beyond
                </p>
            </div>
            <div class="vistxt">
                <h3>Our Motto</h3>
                <p>"Safe food for all by all"
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>