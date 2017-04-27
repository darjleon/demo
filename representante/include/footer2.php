    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            
            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];
        });
    </script>
    <script>
        const tabsDias = document.querySelectorAll('.tabsDias');
        console.log(tabsDias);

        const mq768 = window.matchMedia("(max-width: 768px)");

        if (mq768.matches) {

            for (let i = 0; i < tabsDias.length; i++) {
                if (tabsDias[i].textContent === 'LUNES') {
                    tabsDias[i].textContent = 'Lu';
                } else if (tabsDias[i].textContent === 'MARTES') {
                    tabsDias[if].textContent = 'Ma';
                } else if (tabsDias[i].textContent === 'MIERCOLES') {
                    tabsDias[if].textContent = 'Mi';
                } else if (tabsDias[i].textContent === 'JUEVES') {
                    tabsDias[if].textContent = 'Ju';
                } else if (tabsDias[i].textContent === 'VIERNES') {
                    tabsDias[if].textContent = 'Vi';
                }
            }
        } 
    </script>
</body>
</html>