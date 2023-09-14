<?php
$title = "FOSCU";
include "header.php";
?>

<style>
    .body {
        background: linear-gradient(to top, rgba(0, 256, 0, .2), rgba(0, 256, 0, .2) 50%), url('static/images/home.png');
        background-size: cover;
        color: white;
        object-fit: cover;
        padding: 2rem;
    }

    .mis {
        padding-top: 4rem;
    }

    @media (max-width: 500px) {
        .mis {
            padding-top: 1rem;
        }
    }
</style>
<section class="body">
    <div class="mis">
        <h3>Our Mission</h3>
        <p>To harness partnerships towards promoting sustainable food safety for all consumers in<br>
            Uganda and beyond through the following.
        </p>
        <div class="mission row">
            <div class="tabs col">
                <div class="mistab row">
                    <div class="tab col border-right">
                        <i class='bx bxs-file-doc'></i>
                        <p>Documentation/<br>Research and development</p>
                    </div>
                    <div class="tab col border-right">
                        <i class='bx bxs-file-doc'></i>
                        <p>Advocacy and Lobbying</p>
                    </div>
                    <div class="tab col border-right">
                        <i class='bx bxs-file-doc'></i>
                        <p>Innovative communication and awareness creation</p>
                    </div>
                    <div class="tab col">
                        <i class='bx bxs-file-doc'></i>
                        <p>Innovative communication and awareness creation</p>
                    </div>
                </div>
                <div class="value">
                    <h3>Our Core Values</h3>
                    <p>Transparency and Accountability | Integrity | Respect | Mutual collaboration | Inclusiveness</p>
                </div>
            </div>
            <div class="strat col">
                <div>
                    <h3>Strategic Objectives</h3>
                    <ol type="1">
                        <li>To strengthen coordination and networking among agri-food system actors and partners in Uganda</li>
                        <li>To strengthen the capacity of actors and partners in agri-food system to effectively
                            undertake food safetypromotion and programming
                        </li>
                        <li>To enhance joint advocacy for a positive policy, legal and social environment towards
                            food safety in Uganda and beyond</li>
                        <li>To strengthen research and documentation to inform advocacy and awareness creation on food safety
                            in Uganda and beyond.
                        </li>
                        <li></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
