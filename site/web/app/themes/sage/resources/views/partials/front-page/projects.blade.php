<div class="container">
  <h2>Portfolio</h2>
  <p class="h5">M'n laatste projecten</p>
  <div class="card-deck mt-3">
    <div class="card shadow-sm">
      <div class="card-header bg-transparent">
          <div class="row">
              <div class="col-md-auto">
                <p class="h4">{{ $hp_title_1 }}</p>
              </div>
              <div class="col">
                <span class="badge badge-light">WordPress</span>
                <span class="badge badge-light">Custom thema</span>
                <span class="badge badge-light">WP Plugins</span>
                <span class="badge badge-light">PHP</span>
                <span class="badge badge-light">Isotope</span>
                <span class="badge badge-light">jQuery</span>
              </div>
          </div>
      </div>
      <img src="{{ $hp_image_1 }}" class="card-img-top" alt="Pure Face Art">
      <div class="card-body">
        <p class="card-text">{{ $hp_text_1 }}</p>
      </div>
      <div class="card-footer bg-transparent">
          <div class="row">
              <div class="col text-center">
                <a href="https://daimond.jobgroen.nl/" target="_blank" class="card-link">De website</a>
              </div>
              <div class="col text-center">
                <a href="https://github.com/IcemanHHW/DFV" target="_blank" class="card-link">De code</a>
              </div>
          </div>
      </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-transparent pb-4">
            <div class="row">
                <div class="col-md-auto">
                  <p class="h4">{{ $hp_title_2 }}</p>
                </div>
                <div class="col">
                  <span class="badge badge-light">WordPress</span>
                  <span class="badge badge-light">WP Plugins</span>
                  <span class="badge badge-light">PHP</span>
                </div>
            </div>
        </div>
        <img src="{{ $hp_image_2 }}" class="card-img-top" alt="Afvallen met Nederland">
        <div class="card-body">
          <p class="card-text">{{ $hp_text_2 }}</p>
        </div>
        <div class="card-footer bg-transparent">
            <div class="row">
                <div class="col text-center">
                  <a href="https://afvallenmetnederland.nl/" target="_blank" class="card-link">De website</a>
                </div>
                <div class="col text-center">
                  <a href="https://ma.kampmeijer.nl/stageblog/category/fusionlab/" target="_blank" class="card-link">Stageblog</a>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
