<?php
$title = "FOSCU";
include "header.php";
include "config.php"; // Include the configuration file

// Define an array of PDFs
$pdfs = [
    ["file" => "1HAZARDOUS PESTICIDES CRISIS.pdf", "title" => "Hazardous Pesticides Crisis"],
    ["file" => "2Crisis of HHP.pdf", "title" => "Crisis of HHP"],
    ["file" => "3FoSCU Participation in the CAADP.pdf", "title" => "FOSCU Participation in the CAADP"],
    ["file" => "no 4 50 YEARS OF FOOD SAFETY EXCELLENCE.pdf", "title" => "50 Years of Food Safety Excellence"],
    ["file" => "no 5 RUCID CHAMPIONS ORGANIC AGRICULTURE TRAINING IN UGANDA.pdf", "title" => "RUCID Champions Organic Agriculture Training in Uganda"],
    ["file" => "no 6 The Magic of Pheromone Sex Traps.pdf", "title" => "The Magic of Pheromone Sex Traps"],
    ["file" => "no 7 COLLABORATIVE DEVELOPMENT OF FOOD SAFETY GUIDANCE.pdf", "title" => "RUCID Champions Organic Agriculture Training in Uganda"],
    ["file" => "no 8 AGROECOLOGY.pdf", "title" => "AGROECOLOGY"],
    ["file" => "no 9 FROM TOMATO STALLS TO POLICY HALLS.pdf", "title" => "FROM TOMATO STALLS TO POLICY HALLS"],
    ["file" => "no 10 THE PEOPLE'S TRIBUNAL ON AGROTOXINS.pdf", "title" => "THE PEOPLE'S TRIBUNAL ON AGROTOXINS"],
    ["file" => "no 11 CONSENT Enhancing Food Safety Initiatives at Mbale Central.pdf", "title" => "Enhancing Food Safety Initiatives at Mbale Central"],
    ["file" => "no 12 FOSCU AT HARVEST MONEY EXPO 2025.pdf", "title" => "FOSCU AT HARVEST MONEY EXPO 2025"],
    ["file" => "no 13 FOSCU ADVOCATES FOR ROBUST FOOD SAFETY MEASURES IN UGANDA'S REVISED NUTRITION POLICY AND BILL.pdf", "title" => "FOSCU ADVOCATES FOR ROBUST FOOD SAFETY MEASURES IN UGANDA'S REVISED NUTRITION POLICY AND BILL"],
    ["file" => "no 14 FOSCU TAKES TO THE AIRWAVES AMPLIFYING FOOD SAFETY AWARENESS AND ADVOCACY IN UGANDA.pdf", "title" => "FOSCU TAKES TO THE AIRWAVES AMPLIFYING FOOD SAFETY AWARENESS AND ADVOCACY IN UGANDA"],
    ["file" => "no 15 FOSCU SPEAR HEADS AFLATOXIN AWARENESS CAMPAIGN TO SAFEGUARD UGANDA'S FOOD VALUE CHAIN.pdf", "title" => "FOSCU SPEAR HEADS AFLATOXIN AWARENESS CAMPAIGN TO SAFEGUARD UGANDA'S FOOD VALUE CHAIN"],
    ["file" => "no 16 TACKLING FOOD SAFETY AND MALNUTRITION.pdf", "title" => "TACKLING FOOD SAFETY AND MALNUTRITION"],
    ["file" => "no 17 ADDRESSING THE RISKS OF HIGHLY HAZARDOUS PESTICIDES IN UGANDA.pdf", "title" => "ADDRESSING THE RISKS OF HIGHLY HAZARDOUS PESTICIDES IN UGANDA"],
    ["file" => "no 18 GROUNDNUT TRADERS DEVELOP SELF REGULATION FRAMEWORK.pdf", "title" => "GROUNDNUT TRADERS DEVELOP SELF REGULATION FRAMEWORK"]
];
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
        <?php foreach ($pdfs as $pdf): ?>
          <div class="col-md-4">
            <div class="card shadow">
              <object data="<?php echo htmlspecialchars(REPORTS_PATH . $pdf['file']); ?>" type="application/pdf">
                <p class="p-2">It appears you don't have a PDF plugin for this browser.</p>
              </object>
              <button class="btn">
                <a href="./track_download.php?file=<?php echo htmlspecialchars($pdf['file']); ?>">Download <?php echo htmlspecialchars($pdf['title']); ?></a>
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>