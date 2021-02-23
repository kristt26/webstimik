angular.module('adminctrl', [])
    .controller('homeController', homeController)
    .controller('userController', userController)
    .controller('beritaController', beritaController)
    .controller('tambahBeritaController', tambahBeritaController)
    .controller('laporanController', laporanController)
    ;
function homeController($scope) {
    $scope.itemHeader = { title: "Home", breadcrumb: "Home", header: "Home" };
    $scope.$emit("SendUp", $scope.itemHeader);
    $.LoadingOverlay("hide");
}

function userController($scope, UserServices) {
    $scope.itemHeader = { title: "Home", breadcrumb: "Home", header: "Home" };
    $scope.$emit("SendUp", $scope.itemHeader);
    $scope.datas = [];
    $scope.model = {};
    $scope.simpan = true;
    $scope.level = ['admin', 'publisher'];
    UserServices.get().then(x => {
        $scope.datas = x;
        $.LoadingOverlay("hide");
    })
    $scope.edit = (item)=>{
        $scope.model = item;
        $scope.simpan = false;
    }
    $scope.save = () => {
        Swal.fire({
            title: 'Success',
            text: "Proses Berhasil",
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Ok',
            allowOutsideClick: false
        }).then((result) => {
            if (result.value==true) {
                $.LoadingOverlay("show");
                if ($scope.model.id) {
                    UserServices.put($scope.model).then(x => {
                        $scope.model = {};
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Proses Berhasil',
                            allowOutsideClick: false
                        })
                        $.LoadingOverlay("hide");
                    })
                }else{
                    UserServices.post($scope.model).then(x=>{
                        $scope.model = {};
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Proses Berhasil',
                            allowOutsideClick: false
                        })
                        $.LoadingOverlay("hide");
                    })
                }
            }
        })

    }
}

function beritaController($scope) {
    $scope.itemHeader = { title: "Home", breadcrumb: "Home", header: "Home" };
    $scope.$emit("SendUp", $scope.itemHeader);
    $.LoadingOverlay("hide");
}

function tambahBeritaController($scope) {
    $scope.itemHeader = { title: "Home", breadcrumb: "Home", header: "Home" };
    $scope.$emit("SendUp", $scope.itemHeader);
    $.LoadingOverlay("hide");
}

function laporanController($scope, LaporanServices) {
    $scope.datas = [];
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('set') == 'tempat') {
        $scope.itemHeader = { title: "Laporan Tempat Usaha", breadcrumb: "Laporan", header: "Laporan" };
        $scope.$emit("SendUp", $scope.itemHeader);
        $.LoadingOverlay("hide");
    } else {
        $scope.itemHeader = { title: "Laporan Rekapitulasi", breadcrumb: "Laporan", header: "Laporan" };
        $scope.$emit("SendUp", $scope.itemHeader);
        $.LoadingOverlay("hide");
    }
    $scope.print = () => {
        $("#print").printArea();
    }
}