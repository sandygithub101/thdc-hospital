@section('footer')
<footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a target="_blank" href="{{env('COPYRIGHT_FOOTER_LINK')}}">{{env('COPYRIGHT_FOOTER_NAME')}}.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> {{env('COPYRIGHT_FOOTER_VERSION')}}
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @endsection('footer')