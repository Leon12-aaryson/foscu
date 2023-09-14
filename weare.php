<?php
$title = "FOSCU focus";
include "header.php";
?>
<style>
    .main1 {
        /* background: linear-gradient(to left, rgba(0, 256, 0, .8) 20%, rgba(0, 0, 0, .4)), url('static/images/tomatoes.jpg'); */
        background: url('static/images/tomatoes1.png');
        background-size: cover;
        height: 90vh;
        object-fit: cover;
        padding: 2rem;
    }

    .wetxt ul li{
        list-style: disc;
    }

    .focu1 {
        /* background: linear-gradient(to top, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2) 50%), url('static/images/veges.png'); */
        background: url('static/images/veges.png');
        background-size: cover;
        object-fit: cover;
        height: 110vh;
        padding: 2rem;
    }

    @media (max-width: 650px) {
        .main1 {
            background: linear-gradient(to left, rgba(15, 103, 0, 1) 20%, rgba(0, 0, 0, .4)), url('static/images/tomatoes.jpg');
            /* background: url('static/images/tomatoes1.png'); */
            background-size: cover;
            height: 100vh;
            object-fit: cover;
            padding: 2rem;
        }
    }

    @media only screen and (min-width: 0px) and (max-width: 321px) {
        .main1 {
            background: linear-gradient(to left, rgba(15, 103, 0, 1) 20%, rgba(0, 0, 0, .4)), url('static/images/tomatoes.jpg');
            background-size: cover;
            height: 110vh;
            object-fit: cover;
            padding: 1rem;
        }
    }

    @media (max-width: 769px) {
        .focu1 {
            /* background: linear-gradient(to top, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2) 50%), url('static/images/veges.png'); */
            background: url('static/images/veges.png');
            background-size: cover;
            object-fit: cover;
            height: 140vh;
            padding: 2rem;
        }
    }

    @media (max-width: 1024px) {
        .focu1 {
            /* background: linear-gradient(to top, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2) 50%), url('static/images/veges.png'); */
            background: url('static/images/veges.png');
            background-size: cover;
            object-fit: cover;
            height: 130vh;
            padding: 2rem;
        }
    }
</style>
<div class="navmargin">
    <div class="main1">
        <div class="wetxt">
            <p>FoSCU is not a standalone organisation or institution
                but rather a coalition of local multi-stakeholders
                (organisations/individual experts) jointly working
                towards realisation of sustainable access to safe food
                through engagement in research, awareness creation,
                knowledge transfer and policy dialogue.
                We govern ourselves through unanimously defined and agreed
                joint working modalities spelt out in our
                Governance Charter.<br> <b>Our structures include:</b>
            <ul style="text-align: left; margin-left: 1rem;">
                <li>General Assembly</li>
                <li>Steering Committee</li>
                <li>Technical Working Groups</li>
                <li>Secretariat</li>
            </ul>
            </p>
            <img src="static/images/bar.png" alt="">
        </div>
    </div>
    <div class="bgh">
        <h5>By breaking silos and working jointly, we foresee the following benefits:</h5>
    </div>
    <div class="wear">
        <div class="focu1">
            <div class="txt1">
                <div class="westxt">
                    <i class='bx bx-bullseye'></i>
                    <p>An ecosystem of influence resulting from diversity,
                        capabilities, and inter-connection of different
                        memebers of the coalition. This will ensure that
                        network members add up to more than their parts,
                        permitting simultaneous pushfor safer food using
                        different methods, platforms, financial resources
                        talents, and knowledge
                    </p>
                </div>
                <div class="westxt">
                    <i class='bx bx-bullseye'></i>
                    <p>An opportunity for active cultivation that
                        will facilitate shared learning, resource
                        mobilization and convening around the
                        issue of sustainability.
                    </p>
                </div>
                <div class="westxt">
                    <i class='bx bx-bullseye'></i>
                    <p>Increased likelihood of closing the salience and
                        political deficits around food contamination in
                        Uganda, leveraging on the already existing context-specific
                        evidence that has greatly narrowed the
                        information gap.
                    </p>
                </div>
                <div class="westxt">
                    <i class='bx bx-bullseye'></i>
                    <p>An opportinity to catalyse and facilitate
                        review of policies, regulations and standards
                        frameworks for better food safety
                        governance whilst trantransitionoing towards
                        more sustainable agri-food systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>