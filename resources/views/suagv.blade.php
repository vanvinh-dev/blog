<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SB Admin 2 - Dashboard</title>

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
            
      <div style="padding:20px;background-color: white;">
        <h4>Sửa thông tin giáo viên</h4>
        <!-- Begin Page Content -->
         <form method="post" action="/suagv/<?php echo $member->id; ?>" class="row">
        @method('POST')
                @csrf
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Mã giáo viên</label>
            <input class="form-control" type="text" placeholder="Nhập tên khoa" name="ma" value="<?php echo $member->ma; ?>">
          </div>

          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Tên giáo viên</label>
            <input disabled class="form-control" type="text" placeholder="Nhập tên khoa" name="ten" value="<?php echo $member->ten; ?>">
          </div>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Bậc học</label>
            <input disabled class="form-control" type="text" placeholder="Nhập tên khoa" name="bachoc" value="<?php echo $member->bachoc; ?>">
          </div>


            <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Hệ số</label>
            <input class="form-control" type="number" placeholder="Nhập tên khoa" name="heso" value="<?php echo $member->heso; ?>">
          </div>

            <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Phụ cấp</label>
            <input class="form-control" type="number" placeholder="Nhập tên khoa" name="phucap" value="<?php echo $member->phucap; ?>">
          </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Chức vụ</label>
            <input disabled class="form-control" type="text" placeholder="Nhập tên khoa" name="chucvu" value="<?php $arr=[]; if($member->chucvu=='gv') echo 'giáo viên' ?>">
          </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Bộ môn</label>
            <select  class="form-control" name="mabomon">
                        <?php foreach($subject as $item): ?>
                            <option <?php if($item['id']==$member->mabomon) echo 'selected'; ?> value="{{$item['id']}}">{{$item['name']}}</option>
                        <?php endforeach ?>
            </select>
        </div>
           
     
          <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-sm ">Lưu</button>
          </div>
          
        </form>
       </div>
        
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
