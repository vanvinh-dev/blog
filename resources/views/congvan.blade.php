<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("css/bootstrap-datepicker.css")}}" rel="stylesheet" type="text/css">
 
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

body {
    background: #eee
}

.form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0;
    padding: 6px 12px;
    height: 34px
}
.select2-container--default .select2-selection--multiple .select2-selection__choice{
      background-color: #2196f3!important;
      color:white
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 10px
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-left: 0;
    padding-right: 0;
    height: auto;
    margin-top: -3px
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0 !important;
    padding: 6px 12px;
    height: 40px !important
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 6px !important;
    right: 1px;
    width: 20px
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
  border-right:none!important;
  color:white!important
}
/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
  padding:0px!important;
  margin:0px!important;
    min-height: 100vh;
    background-color: #757f9a;
    background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}
.datepicker {
    background-color: #fff;
    border: none;
    padding:10px 20px 10px 20px!important;
}

.datepicker-dropdown {
    top: 0;
    left: 0
}

.datepicker table tr td.today,
span.focused {
    border-radius: 50% !important
}

thead tr:nth-child(2) {
    background-color: #3f51b5 !important
}

thead tr:nth-child(3) th {
    color: #3f51b5 !important;
    padding-top: 20px;
    padding-bottom: 10px
}

.dow,
.old-day,
.day,
.new-day {
    width: 40px !important;
    height: 40px !important;
    border-radius: 0px !important
}

.old-day:hover,
.day:hover,
.new-day:hover,
.month:hover,
.year:hover,
.decade:hover,
.century:hover {
    border-radius: 50% !important;
    background-color: #eee
}

.active {
    border-radius: 50% !important;

}

.prev,
.next,
.datepicker-switch {
    border-radius: 0 !important;
    padding: 20px 10px !important;
    text-transform: uppercase;
    font-size: 20px;
    color: #fff;
    opacity: 0.8
}

.prev:hover,
.next:hover,
.datepicker-switch:hover {
    background-color: inherit !important;
    opacity: 1
}
#select-type{
        padding: 10px 20px 10px 20px!important;
    border: 1px solid lightgrey !important;
    border-radius: 6px !important;
    box-sizing: border-box!important;
    background-color: #fff !important;
    color: #2C3E50!important;
    font-size: 14px!important;
    letter-spacing: 1px!important;
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
        
        <div class="row" style="padding: 33px;padding-top: 0px;">
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
                        <div class="form-group col-md-12 " style="padding: 2px 24px;margin-top: 10px;">
                            <label for="exampleInputEmail1" style="color:white">Mô tả</label>
                            <textarea  class="form-control" type="text" placeholder="Nhập công văn" name="des" value=""></textarea>
                        </div>
                        <div class="form-group col-md-6 " style="padding: 2px 24px;">
                            <label for="exampleInputEmail1" style="color:white">Loại văn bản</label>
                            <input  class="form-control" type="text" placeholder="Nhập loại văn bản" name="loaivb" value="">
                        </div>
                         <div class="form-group col-md-6 " style="padding: 2px 24px;">
                            <label for="exampleInputEmail1" style="color:white">Lĩnh vực</label>
                            <input  class="form-control" type="text" placeholder="Nhập lĩnh vực" name="linhvuc" value="">
                        </div>
                         <div class="form-group col-md-6 " style="padding: 2px 24px;">
                            <label for="exampleInputEmail1" style="color:white">Ngày ban hành</label>
                            <input  type="text" id="dp1" class="datepicker mr-5 form-controll" placeholder="Chọn ngày ban hành" name="ngaybanh" style="width: 100%;">
                        </div>
                         <div class="form-group col-md-6 " style="padding: 2px 24px;">
                            <label for="exampleInputEmail1" style="color:white">Thời gian hiệu lực</label>
                            <input  type="text" id="dp1" class="datepicker mr-5 form-controll" placeholder="Chọn ngày ban hành" name="ngayhieuluc" style="width: 100%;">
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
                  <th scope="col">Loại văn bản</th>
                  <th scope="col">Lĩnh vực</th>
                  <th scope="col">Ngày ban hành</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="tbody">

              </tbody>
            </table>
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
      </div>
      </div>
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
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chuyển công văn đến bộ môn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
           <div class="col-md-12">
            <div class="form-group"> <label>Gửi đến bộ môn</label> <select class="form-control select2 select2-hidden-accessible" multiple=""  style="width: 100%;" tabindex="-1" aria-hidden="true" id="bomon">
                   
                </select> 
                </div> 
               <div class="form-group"> <label>Gửi đến giáo viên</label> <select class="form-control select2 select2-hidden-accessible" multiple=""  style="width: 100%;" tabindex="-1" aria-hidden="true" id="giaovien">
                   
                </select> 
                </div> 
       
    
          </div>
      </div>
      <div class="modal-footer" id="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" onclick="guicongvan()">Chia sẻ</button>
      </div>
    </div>
  </div>
</div>
  <!-- Page level custom scripts -->
  @include('include.script')
 <script src="{{ asset('bootstrap-datepicker.js')}}"></script>
<script>
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */

$(document).ready(function() {
$('.select2').select2({
closeOnSelect: false
});
});
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
  let currentId
$(function () {
  $('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    todayHighlight: true,
    toggleActive: true,
    });
  loadBomonAndGiaovien()
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
                        <td>${congvan[i].loaivb}</td>
                        <td>${congvan[i].linhvuc}</td>
                        <td>${congvan[i].ngaybanh}</td>
                        <td>
                        <a data-toggle="modal" data-target="#exampleModal" onclick="clickcurrent(${congvan[i].id})"><i class="fa fa-share" style="margin-right:10px"></i></a>
                         <a href="/xoacv/${congvan[i].id}"><i class="fa fa-trash-alt" style="    color: #de3d0b;"></i></a></td>
                         </tr>
                        `
                    }
                }
      })
  });
function clickcurrent(id){
  currentId = id
}
function loadBomonAndGiaovien(){
   $.ajax({
            url:'/getdatabomon',
            type:'GET',
            success:function(data){
                    let bomon = JSON.parse(data)
                    let select
                    for (let i = 0; i < bomon.length; i++) {
                      select += `<option value="${bomon[i].id}">${bomon[i].name}</option>`
                    }
                     $('#bomon').append(select)
                }
      })

     $.ajax({
            url:'/getDataGv',
            type:'GET',
            success:function(data){
                    let gv = JSON.parse(data)
                    let select
                    for (let i = 0; i < gv.length; i++) {
                      select += `<option value="${gv[i].id}">${gv[i].ten}</option>`
                    }
                     $('#giaovien').append(select)
                }
      })
}
function guicongvan(){
          let monhoc  =  $('#bomon option:selected')
                .toArray().map(item => item.value);
          let giaovien  = $('#giaovien option:selected')
                .toArray().map(item => item.value);
          let obj 
          let arr = []
          if(giaovien.length > 0){
            monhoc.forEach((item)=>{
              if(giaovien.length>0){
                 giaovien.forEach((e)=>{
                  obj = {
                          idconvan:currentId,
                          bomon:item,
                          giaovien:e
                        }
                    arr.push(obj)
                 })
               

              }else{
                 obj = {
                          idconvan:currentId,
                          bomon:item,
                      }
                       arr.push(obj)
              }
            })
            
          }
          
          console.log(arr,435)
          $.ajax({
            type: 'post',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/guicongvan',
         
            data: {
                data:arr
            },
            success: function (ret) {
              if(ret){
                  $('#exampleModal').modal('toggle');
                  alert('Công văn đã được chuyển đi!')
              }
            }
          });
}
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
