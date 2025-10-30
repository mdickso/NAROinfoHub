<?php $__env->startSection('content'); ?>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-4">Anti-Tick Vaccine</h1>
    <p>Welcome to the Anti tick.</p>
  </div>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
      .tab-content-placeholder {
          min-height: 200px;
          padding: 20px;
          border: 1px solid #ddd;
          border-radius: 5px;
          background-color: #f8f9fa;
      }
      .nav-tabs .nav-link {
          margin-right: 5px;
          border-radius: 5px;
      }
      .nav-tabs .nav-link.active {
          background-color: #007bff;
          color: white;
      }
      .image-container img {
          width: 100%;
          height: auto;
          border-radius: 10px;
          object-fit: cover;
      }
  </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Anti-Tick Vaccine</h1>
        <div class="row">
            <!-- Left Column: Image -->
            <div class="col-md-6 mb-4">
                <div class="image-container">
                    <img src="https://via.placeholder.com/600x400?text=Anti-Tick+Vaccine+Image" alt="Anti-Tick Vaccine" class="img-fluid">
                    <img
                src="<?php echo e(asset('images/narovac1.png')); ?>"
                alt="NARO Anti-tick vaccine"
                class="block w-full h-56 sm:h-72 md:h-[420px] object-cover"
                loading="lazy"
            >
                </div>
            </div>
            <!-- Right Column: Tabs -->
            <div class="col-md-6 mb-4">
                <ul class="nav nav-tabs" id="vaccineTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="vets-tab" data-bs-toggle="tab" data-bs-target="#vets" type="button" role="tab" aria-controls="vets" aria-selected="true">Vets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="farmers-tab" data-bs-toggle="tab" data-bs-target="#farmers" type="button" role="tab" aria-controls="farmers" aria-selected="false">Farmers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="publications-tab" data-bs-toggle="tab" data-bs-target="#publications" type="button" role="tab" aria-controls="publications" aria-selected="false">Publications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="faqs-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab" aria-controls="faqs" aria-selected="false">FAQs</button>
                    </li>
                </ul>
                <div class="tab-content" id="vaccineTabContent">
                    <div class="tab-pane fade show active tab-content-placeholder" id="vets" role="tabpanel" aria-labelledby="vets-tab">
                        <h3>Vets</h3>
                        <p>Information for veterinarians about the anti-tick vaccine.</p>
                    </div>
                    <div class="tab-pane fade tab-content-placeholder" id="farmers" role="tabpanel" aria-labelledby="farmers-tab">
                        <h3>Farmers</h3>
                        <p>Resources and guidance for farmers using the anti-tick vaccine.</p>
                    </div>
                    <div class="tab-pane fade tab-content-placeholder" id="publications" role="tabpanel" aria-labelledby="publications-tab">
                        <h3>Publications</h3>
                        <p>Research papers and articles related to the anti-tick vaccine.</p>
                    </div>
                    <div class="tab-pane fade tab-content-placeholder" id="faqs" role="tabpanel" aria-labelledby="faqs-tab">
                        <h3>FAQs</h3>
                        <p>Frequently asked questions about the anti-tick vaccine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\infohub\naro-info-hub\resources\views/sections/facilities/anti_tick_vaccine.blade.php ENDPATH**/ ?>