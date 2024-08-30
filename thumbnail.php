<!-- PHP Modal -->
<section>

<div class="section-header">
    <p> Check our<span> Packages</span></p>
</div>

    <div class="modal-container d-flex justify-content-center align-items-center">

      <!-- Package 1 -->
      <div class="thumbnail-container col-md-6 text-center">
        <a class="thumbnail rounded" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
          <img src="assets/img/pack.png" alt="Full Image" class="img-fluid rounded" style="max-width: 60%; height: auto;">
          <div class="section-header">
            <p> Package<span> 1</span></p>
          </div>
        </a>
      </div>

      <!-- Package 2 -->
      <div class="thumbnail-container col-md-6 text-center">
        <a class="thumbnail rounded" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2">
          <img src="assets/img/pack.png" alt="Second Image" class="img-fluid rounded" style="max-width: 60%; height: auto;">
          <div class="section-header">
            <p> Package<span> 2</span></p>
          </div>
        </a>
      </div>

    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Package 1</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item" src="package1.php" style="width: 100%; height: 100%; border: 0;"></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Package 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <iframe class="embed-responsive-item" src="package2.php" style="width: 100%; height: 100%; border: 0;"></iframe>
          </div>
        </div>
      </div>
    </div>
</section>
