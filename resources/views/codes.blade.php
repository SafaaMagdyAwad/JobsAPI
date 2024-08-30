<!DOCTYPE html>
<html>
<head>
    <title>All About Laravel - Bar codes in Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Bar codes</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- DNS1D: This is used for generating one-dimensional (1D) barcodes -->

                            <!-- //DNS2D: This is used for generating two-dimensional (2D) barcodes. -->
                            <div class="col-12">
                                <div class="mb-3"><h5>Qr code from Method</h5>
                                       {!! $html !!}
                                 </div>
                             </div>
                            <div class="col-6">
                                <div class="mb-3"><h5>Pharma</h5>
                                    {!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"><h5>QRCODE</h5>
                                    {!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"><h5>PHARMA2T</h5>
                                {!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T') !!}</div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3"><h5>CODABAR</h5>
                                    {!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!}
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
