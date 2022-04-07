
        
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