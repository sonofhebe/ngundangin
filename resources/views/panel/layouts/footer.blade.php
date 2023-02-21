    <div class="content-footer text-center">
        &copy; {{date('Y')}}. All Rights Reserved. Powered by <a href="https://www.instagram.com/narative.id/" target="_blank">Narative</a>
    </div><!-- content-footer -->
</div><!-- content -->

<script src="{{ url('Admin/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ url('Admin/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('Admin/lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ url('Admin/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('Admin/lib/prismjs/prism.js') }}"></script>
<script src="{{ url('Admin/lib/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ url('Admin/lib/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ url('Admin/lib/js-cookie/js.cookie.js') }}"></script>

<script src="{{ url('Admin/assets/js/cassie.js') }}"></script>
<script>
    // $('#tbl').DataTable({
    // language: {
    //     searchPlaceholder: 'Search...',
    //     sSearch: '',
    //     lengthMenu: '_MENU_ items/page',
    // }
    // });
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});

  // $(function(){
  //   'use strict'
  //   $('#modaladd').on('show.bs.modal', function (event) {
  //     var animation = $(event.relatedTarget).data('animation');
  //     $(this).addClass(animation);
  //   })
  // })

</script>
</body>

</html>