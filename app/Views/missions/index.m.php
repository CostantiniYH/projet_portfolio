<div class="container">
    <section class="row gap-3">
        <div class="col-md-3 col-sm-12 bg-bleu-marine">
            <h3 class="w-100">Epreuve E5</h3>
        </div>
            <div class="col-md bg-white p-3 rounded">
            <p class="alert alert-warning">Le dépôt du dossier de l'épreuve E5 doit se faire à partir du 17 février jusqu'au maximum le 20 mars (23 à midi).</p>
                <p>Il faut venir avec :</p>
            <ul>
                <li>Son portfolio</li>
                <li>Le tableau de synthèse</li>
                <li>Attestation de présence en entreprise</li>
            </ul>
        </div>
        <div>

        </div>
    </section>

    <section class="row">
        <div class="col-md card">
            <h4 class="position-absolute text-white top-50 ">Activité école</h4>
            <img src="<?= BASE_URL ?>uploads/activites/entreprise.png" alt="" usemap="#workmap">
            <map name="workmap">
                <area shape="rect" coords="400, 400, 400, 400" href="#" alt="">
            </map>
        </div>
        <div class="col-md card">
            <h4 class="position-absolute text-white top-50 ">Activité entreprise</h4>
            <img src="<?= BASE_URL ?>uploads/activites/entreprise.png" alt="" usemap="#ecolemap">
            <map name="ecolemap">
                <area shape="rect" coords="400,400,400,400" href="activites" alt="">
            </map>
        </div>
    </section>

    <section class="row">
        <div class="form-control">
            <a class="nav-link dropdown-toggle " href="activites" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sélectionnez une mission old</a>
            <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item nav-hov" href="activite_1">Acivité 1 - Devsio-Chat</a>
                </li>
                <li>
                    <a class="dropdown-item nav-hov" href="activite_2">Activité 2 - Evaluation QCM</a>
                </li> 
                <li>
                    <a class="dropdown-item nav-hov" href="activite_3">Activité 3 - Server ubuntu</a>
                </li>
            </ul>
        </div>
    </section>
</div>