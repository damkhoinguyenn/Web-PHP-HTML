<!doctype html>
<html lang="en">

<head>
  <title>Xét tuyển học bạ</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--STYLE CSS-->
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
  <div class="logo">
    <div class="container">
      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm bg-info">
          <h4 class="text-center"><span style="color: white;">Thông tin hồ sơ</span></h4>
        </div>
        <div class="col-sm"></div>
      </div>
    </div>

  </div>
  <div class="cont">
    <form action="addtoDB.php" method="post">
    <div class="container all">
      <div class="row">
        <div class="col-sm-10">
          <!-- form1 -->
          <div class="container">
            <div class="row 1">
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup">Nhập tên</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Họ và tên</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhâp tên">
                </div>
              </div>
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup">Giới tính</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Giới tính</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row 2">
              <div class="col-sm-6">
                <label class="sr-only" for="inlineFormInputGroup">Nhập ngày tháng năm sinh</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Ngày Sinh</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập ngày tháng năm sinh">
                </div>
              </div>
              <div class="col-sm-3">
                <label class="sr-only" for="inlineFormInputGroup">Nhập tên</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Dân tộc</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập tên">
                </div>
              </div>
              <div class="col-sm-3">
                <label class="sr-only" for="inlineFormInputGroup">Nhập tên</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Tôn giáo</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập tên">
                </div>
              </div>
            </div>
            <div class="row 3">
              <div class="col">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Nơi sinh</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Năm tốt nghiệp</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row 4">
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Học lực lớp 12</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Hạnh kiểm lớp 12</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row 5">
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Số CMND/CCCD</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập CMND">
                </div>
              </div>
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Ngày cấp</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ngày cấp">
                </div>
              </div>
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Nơi cấp</div>
                  </div>
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row 6">
              <div class="col-sm-12">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Hộ khẩu thường trú</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập Hộ khẩu thường trú">
                </div>
                <small class="form-text text-muted">Ghi rõ tên tỉnh(Thành phố),huyện(Quận),xã(Phường)vào ô hộ khẩu thường trú.</small>
                <h6>Nơi học THPT hoặc tương đương(ghi tên trường và địa chỉ trường:huyện(quận),tỉnh(thành phố)):</h6>
              </div>
            </div>
          </div>
          <!-- form2 -->
          <div class="container form2">
            <div class="row 7">
              <div class="col-sm">
                <small class="form-text text-muted">Niên khóa</small>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Năm lớp 10</div>
                  </div>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Năm lớp 11</div>
                  </div>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Năm lớp 12</div>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <small class="form-text text-muted">Năm lớp</small>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
              </div>
              <div class="col-sm-3 ">
                <small class="form-text text-muted">Tên tỉnh/TP</small>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="col-sm">
                <small class="form-text text-muted">Mã trường</small>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
                <div class="input-group-prepend  mb-2">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
                </div>
              </div>
              <div class="col-sm-4 ">
                <small class="form-text text-muted">Tên trường</small>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="input-group-prepend mb-2">
                  <select id="inputState" class="form-control">
                    <option selected>-Chọn-</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row 8">
              <div class="col">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Địa chỉ liên hệ</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập địa chỉ">
                </div>
              </div>
            </div>
            <div class="row 9">
              <div class="col-sm">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Điện thoại thí sinh</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập số điện thoại">
                </div>
              </div>
              <div class="col">
                <label class="sr-only" for="inlineFormInputGroup"></label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Điện thoại phụ huynh</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập số điện thoại">
                </div>
              </div>
            </div>
            <div class="row 10">
              <div class="col-sm-9">
                <h6>Đối tượng ưu tiên tuyển sinh(Thuộc đối tượng nào thì chọn đối tượng bên phải).</h6>
              </div>
              <div class="col-sm-3 mb-2">
                <select id="inputState" class="form-control">
                  <option selected>-Chọn-</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="row 11">
              <div class="col-sm-9">
                <h6>Khu vực ưu tiên tuyển sinh(Thuộc khu vực nào thì chọn kí hiệu của khu vực:KV1,KV2,KV3,KV4)vào ô bên phải.</h6>
              </div>
              <div class="col-sm-3 mb-2">
                <select id="inputState" class="form-control">
                  <option selected>-Chọn-</option>
                  <option>KV1</option>
                  <option>KV2</option>
                  <option>KV3</option>
                </select>
              </div>
            </div>
            <div class="row 12">
              <div class="col-sm mb-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Xét tuyển bằng tổng điểm trung bình lớp 12 bằng 3 môn</label>
              </div>
              </div>
            </div>
            <div class="row 13">
              <div class="col-sm ">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Xét tuyển bằng tổng điểm trung bình 3 học kỳ(Kì 1 và kì 2 lớp 11,kì 1 lớp 12)</label>
              </div>
              </div>
            </div>
            <div class="col-md mt-2">
                <button type="button" class="btn send btn-primary ">Gửi đơn đăng kí</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>