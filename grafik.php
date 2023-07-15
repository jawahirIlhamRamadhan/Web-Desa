<script src="vendor/chartjs/dist/Chart.js"></script>

<?php
include 'koneksi.php';
?>
          

            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                    <canvas id="myChart"></canvas>
                    <?php 
                        $nm_surat= "";
                        $jumlah=null;
                        $sql="SELECT kodejenis, nmsurat, COUNT(*) as 'JS' from t_datasurat WHERE status='acc' GROUP by kodejenis";

    $hasil=mysqli_query($con,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        $kode1=$data['kodejenis'];
        $nm_surat .= "'$kode1'". ", ";

        $jum1=$data['JS'];
        $jumlah .= "$jum1". ", ";
    }
    ?>
                    <!-- Sales Chart Canvas -->
    <script>
                    // single bar chart
                    var ctx = document.getElementById( "myChart" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [<?php echo $nm_surat; ?>],
                            datasets: [
                                {
                                    label: "Grafik Pelayanan Surat",
                                    data: [<?php echo $jumlah; ?>],
                                    borderColor: "rgba(0, 123, 255, 0.2)",
                                    borderWidth: "0",
                                    backgroundColor: [
                                    'rgb(255, 99, 132)', 
                                    'rgb(56, 86, 255)', 
                                    'rgb(60, 179, 113)',
                                    'rgb(175, 238, 120)',
                                    'rgb(6, 100, 114)',
                                    'rgb(5, 70, 116)',
                                    'rgb(7, 120, 200)',
                                    'rgba(8, 117, 250)',
                                    'rgb(150, 99, 132)', 
                                    'rgb(70, 86, 218)', 
                                    'rgb(85, 179, 163)',
                                    'rgb(95, 238, 189)',
                                    'rgb(46, 100, 223)',
                                    'rgb(85, 70, 155)',
                                    'rgb(77, 120, 180)',
                                    'rgba(98, 117, 127)',

                                    'rgb(244, 99, 119)', 
                                    'rgb(81, 86, 212)', 
                                    'rgb(50, 179, 226)',
                                    'rgb(145, 238, 207)',
                                    'rgb(106, 100, 14)',
                                    'rgb(15, 70, 223)',
                                    'rgb(72, 120, 20)',
                                    'rgba(80, 117, 50)',
                                    'rgb(110, 19, 132)', 
                                    'rgb(170, 86, 108)', 
                                    'rgb(185, 179, 63)',
                                    'rgb(195, 238, 89)',
                                    'rgb(146, 100, 23)',
                                    'rgb(125, 70, 125)',
                                    'rgb(177, 120, 88)',
                                    'rgb(154, 115, 89)',
                                    'rgb(122, 191, 81)',
                                    'rgb(111, 134, 97)',
                                    'rgb(156, 117, 121)',
                                    'rgb(132, 109, 68)',
                                    'rgba(198, 117, 27)']
                                            }
                                        ]
                        },
                        options: {
                            scales: { 
                                yAxes: [ {
                                    ticks: {
                                        beginAtZero: true,
                                        fontSize: 10
                                    }
                                                } ]
                            }
                        }
                    } );
        </script>

                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>