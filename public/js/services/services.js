angular.module('services', [])
    .factory('UserServices', UserServices)
    .factory('LaporanServices', LaporanServices)
    ;

function UserServices($http, $q, helperServices, AuthService) {
    var controller = helperServices.url + '/admin/user/';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get, post: post, put: put
    };

    function get() {
        var def = $q.defer();
        if (service.instance) {
            def.resolve(service.data);
        } else {
            $http({
                method: 'get',
                url: controller + "getdata",
                headers: AuthService.getHeader()
            }).then(
                (res) => {
                    service.instance = true;
                    service.data = res.data;
                    def.resolve(res.data);
                },
                (err) => {
                    def.reject(err);
                    message.error(err);
                }
            );
        }
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + 'post',
            data: param,
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                service.data.push(res.data);
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
                $.LoadingOverlay("hide");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: err.data,
                    allowOutsideClick: false
                })
            }
        );
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + 'put',
            data: param,
            headers: AuthService.getHeader()
        }).then(
            (res) => {
                var data = service.data.find(x => x.id == param.id);
                if (data) {
                    data.username = param.username;
                    data.password = param.password;
                    data.level = param.level;
                    data.nama_depan = param.nama_depan;
                    data.nama_belakang = param.nama_belakang;
                }
                def.resolve(res.data);
            },
            (err) => {
                def.reject(err);
                $.LoadingOverlay("hide");
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: err.data,
                    allowOutsideClick: false
                })
            }
        );
        return def.promise;
    }

}

function LaporanServices($http, $q, helperServices, AuthService) {
    var controller = helperServices.url + '/laporan/';
    var service = {};
    service.data = [];
    service.instance = false;
    return {
        get: get
    };

    function get(item) {
        var def = $q.defer();
        if (service.instance) {
            def.resolve(service.data);
        } else {
            $http({
                method: 'get',
                url: controller + 'get?set=' + item,
                headers: AuthService.getHeader()
            }).then(
                (res) => {
                    service.instance = true;
                    service.data = res.data;
                    def.resolve(res.data);
                },
                (err) => {
                    console.log(err.data);
                    def.reject(err);

                }
            );
        }
        return def.promise;
    }
}

