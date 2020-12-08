<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'file upload';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    min-height: 100vh;
    background-color: #757f9a;
    background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}
</style>
  <title></title>
  @include('include.css')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('include.menu')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('include.header')
        
        <div class="row" style="padding: 33px">
        <div class="col-md-5">
            <form action="/saveconvan" method="POST" enctype="multipart/form-data" class="row py-4" style="background-color: #4b70dd;    border-radius: 11px;">
          {{ csrf_field() }}
                    <div class="col-md-12" style="padding: 8px 24px;">
                    <h5 style="color:white">Thêm công văn</h5>
                </div>
                <div class="col-md-12" style="padding: 8px 24px;">
                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="max-height:200px"></div>
                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                <input id="upload" type="file" name="filesTest" onchange="readURL(this);" class="form-control border-0">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Chọn công văn</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Chọn công văn </small></label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group col-md-12 " style="padding: 8px 24px;margin-top: 19px;">
                            <label for="exampleInputEmail1" style="color:white">Mô tả</label>
                            <textarea  class="form-control" type="text" placeholder="Nhập công văn" name="des" value=""></textarea>
                        </div>
                        <div class="col-md-12" style="padding: 8px 24px;">
                            <button  class="btn btn-success" type="submit">Thêm</button>
                        </div>
                </form>
        </div>
        <div class="col-md-7">
             <table class="table  table table-bordered" style="    background-color: white;    text-align: center;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Công văn</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="tbody">

              </tbody>
            </table>
        </div>
            
        </div>
        
      </div>
      </div>
      </div>
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
<script>
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
  let doc = ['.docx', '.DOCX', '.doc', '.DOC']
let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
 
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          console.log(e)
        if (hasExtension(input.files[0].name,excel)) {
          console.log('1')
            $('#imageResult')
                .attr('src', '/img/excel.png');
        }else if(hasExtension(input.files[0].name,doc)) {
            $('#imageResult')
                .attr('src', '/img/docx.png');
        }else{
           $('#imageResult')
                .attr('src', e.target.result);
        }
           
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    $('#upload').on('change', function () {
        readURL(input);
    });
    document.getElementById('tbody').innerHTML = ''
     $.ajax({
                url:'/getdataCongvan',
                type:'GET',
                success:function(data){
                    let congvan = JSON.parse(data)
                    console.log(congvan)
                    for (let i = 0; i < congvan.length; i++) {
                        let teamplate 
                        if (hasExtension(congvan[i].file,excel)) {
                           teamplate = `<a href=""> <img src="/img/excel.png" style="border-radius: 10px;max-height: 106px;" > </a>`
                        }else if(hasExtension(congvan[i].file,doc)) {
                           teamplate = `<a href=""> <img src="/img/docx.png" style="border-radius: 10px;max-height: 106px;"> </a>`
                        }else{
                           teamplate = `<a href=""> <img src="/upload/${congvan[i].file}" style="border-radius: 10px;max-height: 106px;"> </a>`
                        }
                        document.getElementById('tbody').innerHTML +=`
                          <tr>
                        <th scope="row">${i+1}</th>
                        <td>${teamplate}</td>
                        <td>${congvan[i].Mota}</td>
                        <td>
                        <a href="/chiase/${congvan[i].id}"><i class="fa fa-share" style="margin-right:10px"></i></a>
                         <a href="/xoacv
                         
                         /${congvan[i].id}"><i class="fa fa-trash-alt" style="    color: #de3d0b;"></i></a></td>
                    </tr>
                        `
                    }
                }
      })
});

function hasExtension(fileName, exts) {
  return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}
/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

</script>
</body>

</html>
