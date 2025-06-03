<?php
$title = "FOSCU";
include "header.php";
include "config.php"; // Include the configuration file

$pdfs = [
  ["file" => "FoSCU Report_Members OCA.pdf", "title" => "FoSCU Report Members OCA"],
  ["file" => "FOSCU Sythesis Report 2024-FINAL.pdf", "title" => "FOSCU Sythesis Report 2024"],
  ["file" => "AFLATOXINS IN UGANDA 03062025. Final Printable version pdf.pdf", "title" => "AFFLATOXIS IN UGANDA 03062025"],
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
              <object data="<?php echo htmlspecialchars(BASE_FILE_PATH . $pdf['file']); ?>" type="application/pdf">
                <p class="p-2">It appears you don't have a PDF plugin for this browser.</p>
              </object>
              <button class="btn">
                <a href="./track_download.php?file=<?php echo htmlspecialchars($pdf['file']); ?>&path=base">Download file.</a>
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