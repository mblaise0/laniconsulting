
<?php
// include './enDecpt.php';
$parse_specifier;

if (empty($_GET)) {

    // do nothing, redirect to the actual url
} else {
    $parse_specifier = $_GET['id'];

    if ($parse_specifier == 1) {
        echo '
            <script>
            setTimeout(function () {
            $("#publicSector").modal("show");
            }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 2) {
        echo '
            <script>
                setTimeout(function () {
                $("#privateSector").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 3) {
        echo '
            <script>
                setTimeout(function () {
                $("#nonProfit").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 4) {
        echo '
            <script>
                setTimeout(function () {
                $("#internationalDev").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 5) {
        echo '
            <script>
                setTimeout(function () {
                $("#management").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 6) {
        echo '
            <script>
                setTimeout(function () {
                $("#humanCapital").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 7) {
        echo '
                <script>
                    setTimeout(function () {
                    $("#humanitarianInt").modal("show");
                    }, 5000); 
                </script>
            ';
    } else if ($parse_specifier == 8) {
        echo '
            <script>
                setTimeout(function () {
                $("#sustainability").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 9) {
        echo '
            <script>
                setTimeout(function () {
                $("#financialTech").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 10) {
        echo '
            <script>
                setTimeout(function () {
                $("#financialTax").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 11) {
        echo '
            <script>
                setTimeout(function () {
                $("#infoTech").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 12) {
        echo '
            <script>
                setTimeout(function () {
                $("#agriculturalModal").modal("show");
                }, 5000); 
            </script>
        ';
    } else if ($parse_specifier == 13) {
        echo '
            <script>
                setTimeout(function () {
                $("#internationalDev").modal("show");
                }, 5000); 
            </script>
        ';
    }
}
?>