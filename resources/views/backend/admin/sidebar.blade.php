<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Admin</div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>

  <ul class="nav menu">
    <li><a href="{{ url('/admin/mahasiswa/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Mahasiswa</a></li>
    <li><a href="{{ url('/admin/matakuliah/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Mata Kuliah</a></li>
    <li><a href="{{ url('/admin/kelas/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Kelas</a></li>
    <li><a href="{{ url('/admin/nilai/') }}"><em class="fa fa-bar-chart">&nbsp;</em> Nilai</a></li>
    <li><a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
  </ul>
</div>