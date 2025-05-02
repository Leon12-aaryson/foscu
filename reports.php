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
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow">
            <object data="static/briefs/FoSCU Report_Members OCA.pdf" type="application/pdf">
              <p class="p-2">It appears you don't have a PDF plugin for this browser.</p>
            </object>
            <button class="btn"><a href="./track_download.php?file=FoSCU Report_Members OCA.pdf">Download file.</a></button>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
               <object data="static/briefs/FOSCU Sythesis Report 2024-FINAL.pdf" type="application/pdf">
                  <p class="p-2">It appears you don't have a PDF plugin for this browser.</p>
                </object>
                <button class="btn"><a href="./track_download.php?file=FOSCU Sythesis Report 2024-FINAL.pdf">Download file.</a></button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php";