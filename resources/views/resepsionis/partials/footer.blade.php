
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="#">FAQ</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact us</a></li>
                    </ul>
                </div>


                <div class="col-lg text-center text-lg-right">
                    &copy; 2022 Farid Fadilah Permana. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>
<script src="{{ asset("storage/script/admin/Dashboard-js/graindashboard.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/graindashboard.vendor.js") }}"></script>

<!-- DEMO CHARTS -->
<script src="{{ asset("storage/script/admin/Dashboard-js/resizeSensor.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/chartist.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/chartist-plugin-tooltip.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/gd.chartist-area.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/gd.chartist-bar.js") }}"></script>
<script src="{{ asset("storage/script/admin/Dashboard-js/gd.chartist-donut.js") }}"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>