<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uqi Academy - 2024 Batch 01</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1>UQI ACADEMY 2024 BATCH 01</h1>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-5">
                <!-- Upper Part -->
                <div class="row">
                    <!-- Kolom Atas - Bagian 1 -->
                    <div class="col-4 hidden" id="picture">
                        <div class="p-3 border bg-light">
                              <div class="card shadow mb-4">
                                    <div class="card-body p-0">
                                        <img id="personal-picture" src="" alt="Personal Picture" class="img-fluid w-100">
                                    </div>
                              </div>
                        </div>
                    </div>
                    <!-- Kolom Atas - Bagian 2 -->
                    <div class="col-8 hidden" id="personal-info">
                        <div class="p-3 border bg-light">
                            <div class="card shadow mb-4">
                                <div class="card-body p-1">
                                    <h2>Personal Info</h2>
                                    <div class="col-lg-12">
                                         <ul>
                                           <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span id="personal-name"></span></li>
                                           <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span id="personal-phone"></span></li>
                                           <li><i class="bi bi-chevron-right"></i> <strong>School:</strong> <span id="personal-school"></span></li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lower Part -->
                <div class="row mt-4">
                    <div class="col-12 hidden" id="specification">
                        <div class="p-3 border bg-light">
                            <div class="card shadow mb-4">
                                <div class="card-body p-5">
                                    <h2>Device Specification</h2>
                                    <div class="col-lg-12">
                                        <ul>
                                          <li><i class="bi bi-chevron-right"></i> <strong>Device:</strong> <span id="device"></span></li>
                                          <li><i class="bi bi-chevron-right"></i> <strong>Processor:</strong> <span id="processor"></span></li>
                                          <li><i class="bi bi-chevron-right"></i> <strong>RAM:</strong> <span id="ram"></span></li>
                                          <li><i class="bi bi-chevron-right"></i> <strong>VGA:</strong> <span id="vga"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-md-7">
                <div class="p-3 border bg-light text-center">
                    <div class="card shadow mb-4">
                        <div class="card-body p-1">
                            <!-- <img src="/src/bahan_mapping/map.jpg" alt="Responsive Image" class="img-fluid w-100"> -->
                            <!-- Image Map Generated by http://www.image-map.net/ -->
                            <img src="/src/bahan_mapping/map.jpg" usemap="#image-map">

                            <map name="image-map">
                                <area onclick="showInfo('a')" alt="meja-a" title="meja-a" href="javascript:void(0);" coords="4031,1932,3827,2339" shape="rect">
                                <area onclick="showInfo('b')" alt="meja-b" title="meja-b" href="javascript:void(0);" coords="4020,1506,3824,1909" shape="rect">
                                <area onclick="showInfo('c')" alt="meja-c" title="meja-c" href="javascript:void(0);" coords="4027,1082,3827,1481" shape="rect">
                                <area onclick="showInfo('d')" alt="meja-d" title="meja-d" href="javascript:void(0);" coords="4035,652,3827,1051" shape="rect">
                                <area onclick="showInfo('e')" alt="meja-e" title="meja-e" href="javascript:void(0);" coords="4020,233,3416,486" shape="rect">
                                <area onclick="showInfo('f')" alt="meja-f" title="meja-f" href="javascript:void(0);" coords="3386,232,2771,470" shape="rect">
                                <area onclick="showInfo('g')" alt="meja-g" title="meja-g" href="javascript:void(0);" coords="2749,233,2130,478" shape="rect">
                                <area onclick="showInfo('h')" alt="meja-h" title="meja-h" href="javascript:void(0);" coords="2259,1410,2059,1825" shape="rect">
                                <area onclick="showInfo('i')" alt="meja-i" title="meja-i" href="javascript:void(0);" coords="2255,1845,2066,2248" shape="rect">
                                <area onclick="showInfo('j')" alt="meja-j" title="meja-j" href="javascript:void(0);" coords="2481,2482,2089,2682" shape="rect">
                                <area onclick="showInfo('k')" alt="meja-k" title="meja-k" href="javascript:void(0);" coords="2899,2485,2511,2697" shape="rect">
                                <area onclick="showInfo('l')" alt="meja-l" title="meja-l" href="javascript:void(0);" coords="3311,2490,2926,2686" shape="rect">
                                <area onclick="showInfo('m')" alt="meja-m" title="meja-m" href="javascript:void(0);" coords="1587,263,1342,388" shape="rect">
                                <!-- <area onclick="showInfo('n')" alt="meja-n" title="meja-n" href="javascript:void(0);" coords="1316,267,1075,388" shape="rect"> -->
                                <area onclick="showInfo('o')" alt="meja-o" title="meja-o" href="javascript:void(0);" coords="1037,272,803,396" shape="rect">
                                <!-- <area onclick="showInfo('p')" alt="meja-p" title="meja-p" href="javascript:void(0);" coords="1037,1176,796,1300" shape="rect"> -->
                                <area onclick="showInfo('q')" alt="meja-q" title="meja-q" href="javascript:void(0);" coords="1305,1177,1067,1305" shape="rect">
                                <!-- <area onclick="showInfo('r')" alt="meja-r" title="meja-r" href="javascript:void(0);" coords="1580,1173,1342,1301" shape="rect">
                                <area onclick="showInfo('s')" alt="meja-s" title="meja-s" href="javascript:void(0);" coords="1753,1395,1154,1640" shape="rect">
                                <area onclick="showInfo('t')" alt="meja-t" title="meja-t" href="javascript:void(0);" coords="1127,1408,532,1631" shape="rect"> -->
                                <area onclick="showInfo('u')" alt="meja-u" title="meja-u" href="javascript:void(0);" coords="3179,712,2821,1372" shape="rect">
                                <area onclick="showInfo('v')" alt="meja-v" title="meja-v" href="javascript:void(0);" coords="3190,1403,2821,2063" shape="rect">
                            </map>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/src/resizer.js"></script>
    <script src="/src/script.js"></script>
    <script>
        imageMapResize();
    </script>
</body>
</html>
