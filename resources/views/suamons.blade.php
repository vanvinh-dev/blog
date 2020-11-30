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
        <!-- Begin Page Content -->
        <form method="post" action="/suamons/<?php echo $subject->id; ?>" class="row">
        @method('POST')
                @csrf
         <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Mã bộ môn</label>
            <input class="form-control" type="text" placeholder="Nhập bộ môn" name="mamh" value="<?php echo $subject->mamh; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Tên bộ môn</label>
            <input class="form-control" type="text" placeholder="Nhập tên bộ môn" name="name" value="<?php echo $subject->name; ?>">
          </div>
            <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Số tín chỉ</label>
            <input class="form-control" type="number" placeholder="Nhập tín chỉ bộ môn" name="tinchi" value="<?php echo $subject->tinchi; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Số chứng chỉ</label>
            <input class="form-control" type="number" placeholder="Nhập  chứng chỉ bộ môn" name="chungchi" value="<?php echo $subject->chungchi; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Số tiết học</label>
            <input class="form-control" type="number" placeholder="Nhập tiết học bộ môn" name="sotiethoc" value="<?php echo $subject->sotiethoc; ?>">
          </div>

           <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Bộ môn</label>
            <select  class="form-control" name="mabomon">
                        <?php foreach($subjects as $item): ?>
                            <option <?php if($item['id']==$subject->mabomon) echo 'selected'; ?> value="{{$item['id']}}">{{$item['name']}}</option>
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
