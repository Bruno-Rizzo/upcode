<!-- JAVASCRIPT -->
<script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>


<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- jquery.vectormap map -->
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
</script>
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
</script>

<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
</script>

<script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

<!-- toastr plugin -->
<script src="{{ asset('backend/assets/libs/toastr/build/toastr.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>


<!-- Carregar Imagem do Profile -->
<script>
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


<!-- =============Menssagens================ -->


<!-- Toastr - Mensagens -->
<script>
    @if (Session::get('message'))

        var type = "{{ Session::get('alert-type', 'info') }}"

        $(document).ready(function() {
            toastr.options = {
                "progressBar": true,
                "timeOut": "2800",
                "positionClass": "toast-top-center"
            }

            switch (type) {

                case 'info':
                    toastr.info('{{ Session::get('message') }}');
                    break;
                case 'success':
                    toastr.success('{{ Session::get('message') }}');
                    break;
                case 'warning':
                    toastr.warning('{{ Session::get('message') }}');
                    break;
                case 'error':
                    toastr.error('{{ Session::get('message') }}');
                    break;

            }

        });
    @endif
</script>

<!-- Modal Excluir Usuário -->
<script>
    $(document).on('click', 'a', function(event) {
        var usr = $(this).attr('user');
        $('#idUser').val(usr);
    });
</script>

<!-- Modal Excluir Função -->
<script>
    $(document).on('click', 'a', function(event) {
        var rol = $(this).attr('role');
        $('#idRole').val(rol);
    });
</script>
