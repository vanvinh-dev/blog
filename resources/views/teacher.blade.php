<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  @include('include.css')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('include.menu')
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        @include('include.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div style="padding:20px">
            <div style="">
            </div>
            <table class="table  table table-bordered" style="    background-color: white;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mã giáo viên</th>
                  <th scope="col">Tên giáo viên</th>
                  <th scope="col">Bậc học</th>
                  <th scope="col">Hệ số</th>
                  <th scope="col">Phụ cấp</th>
                  <th scope="col">Chức vụ</th>
                  <th scope="col">Bộ môn</th>
                   <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              <?php $stt=0; foreach($teacher as $item): $stt++?>
                    <tr>
                        <th scope="row">{{$stt}}</th>
                        <td>{{$item['ma']}}</td>
                        <td>{{$item['ten']}}</td>
                        <td>{{$item['bachoc']}}</td>
                        <td>{{$item['heso']}}</td>
                        <td>{{$item['phucap']}}</td>
                        <td>Giáo viên</td>
                           <td><?php echo App\Models\subject::find($item['mabomon'])->name ?></td>
                        <td style="text-align: center;">
                         <a href="/suagv/{{$item['id']}}"><i class="fa fa-edit" style="margin-right:10px"></i></a>
                         <a href="/xoagv/{{$item['id']}}"><i class="fa fa-trash-alt" style="    color: #de3d0b;"></i></a></td>
                    </tr>
                    <tr>
                    
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
        
      
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Page level custom scripts -->
  @include('include.script')

</body>

</html>
