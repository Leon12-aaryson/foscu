<?php
$title = "FOSCU focus";
include "header.php";
?>
<style>
    .main3 {
        background: url('static/images/main1.png');
        background-size: cover;
        object-fit: cover;
        padding: 2rem;
    }

    .head1 {
        float: left;
        padding-top: 6rem;
        color: white;
        margin-top: 7rem;
        padding-left: 6rem;
        width: 100%;
        height: 90vh;
    }

    @media only screen and (min-width: 0px) and (max-width: 400px) {

        .head1 {
            float: left;
            padding-top: 1rem;
            color: white;
            margin-top: 1rem;
            padding-left: 1rem;
            width: 100%;
            height: 70vh;
        }
    }
</style>
<div class="navmargin">
    <section class="main3">
        <section>
            <div class="head">
                <div class="head1">
                    <h3>At FoSCU we realize<br>
                        our food safety work through<br>
                        four technical working groups (TWGs)</h3>
                </div>
            </div>
        </section>
        <section>
            <div class="focus2">
                <div class="worktxt row">
                    <div class="col-md-3 grat">
                        <img src="static/images/research.png" alt="">
                    </div>
                    <div class="col-md-9 wrtxt">
                        <h3>TWG1: Food safety documentation, research, and development</h3>
                        <p>The group's work forms the core of our involvement in food safety. scientific research the
                            systemic generation and synthesis of evidence on food safety, that is context-specific.
                            We put great emphasis on analysing food safety hazards through a value-chain
                            approach. TGW1's work is guided by a research and development long-term strategy,
                            agreed upon by all FoSCU members.</p>
                    </div>
                </div>
                <div class="worktxt row">
                    <div class="col-md-9 wrtxt">
                        <h3>TWG2: Food safety communication and awareness creation</h3>
                        <p>Coalition members with communication expertise constitute this groups. Guided
                            by an all agreed long-term communication strategy, TWG2 packages food safety
                            information in innovative and interactive communication tools for use in
                            awareness creation, targeting consumers of diverse categories</p>
                    </div>
                    <div class="col-md-3 grat">
                        <img src="static/images/aware.png" alt="">
                    </div>
                </div>
                <div class="worktxt row">
                    <div class="col-md-3 grat">
                        <img src="static/images/assistance.png" alt="">
                    </div>
                    <div class="col-md-9 wrtxt">
                        <h3>TWG3: Food safety technical assistance and capacity building</h3>
                        <p>This group of FoSCU members coordinates trainings and knowledge transfer
                            engagements targeting members of the coalition, and other stakeholders
                            (farmers, consumers, input dealers, food food venders among others). Its work is
                            guided by a long-term capacity building strategy
                        </p>
                    </div>
                </div>
                <div class="worktxt row">
                    <div class="col-md-9 wrtxt">
                        <h3>TGW4: Food safety governance, compliance, and normative work.</h3>
                        <p>Members of the coalition with expertise and experience in policy analysis,
                            lobbying and advocacy constitute this group. On behalf of FoSCU they engage
                            duty bearers through relevant form on legal and institutional aspects of food
                            safety in the country. Their work is guided by a coalition approved food safety
                            governance strategy.
                        </p>
                    </div>
                    <div class="col-md-3 grat">
                        <img src="static/images/policy.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
<?php
include "footer.php";
?>