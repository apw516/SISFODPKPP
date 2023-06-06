@extends('templates.main')
@section('container')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Pengajuan Rekomendasi Siteplan</h3>
            </div>
        </div>
        <div class="page1">

        </div>
    </div>
    <script>
        $(document).ready(function() {
                index()
            });
        function nextpage_2() {
            loadshow()
            $.ajax({
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                url: '<?= route('ambilpage2') ?>',
                success: function(response) {
                    loadhide()
                    $('.page1').html(response);
                }
            });
        }
        function index() {
            loadshow()
            $.ajax({
                type: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                url: '<?= route('ambilpage1') ?>',
                success: function(response) {
                    loadhide()
                    $('.page1').html(response);
                }
            });
        }
    </script>
@endsection
