  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <article class="bg-light">
      <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
          <h3 align="center">Quản lí Slider <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning button"><span>Add</span></button></h3>
          <br />
          <div class="row">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10" id="slider_table">
                  <table id="customers" class="table table-bordered">
                      <tr>
                          <th width="20%">STT</th>
                          <th width="20%">Name</th>
                          <th width="20%">Hình ảnh</th>
                          <th width="20%">Edit</th>
                          <th width="20%">View</th>
                          <th width="20%">Delete</th>
                      </tr>
                      <?php
                        $i = 1;
                        foreach ($showslider as $row) {
                            echo ' <tr>
                             <td align="center">' . $i . '</td>
                             <td>' . $row["name"] . '</td>
                             <td>' . $row["image"] . '</td>
                             <td align="center"><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>
                             <td align="center"><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
                             <td align="center"><a  href="?act=slider&del=' . $row["id"] . '" name="delete" ><i class="fa fa-trash-o"></i></a></td>
                         </tr>';
                            $i++;
                        }
                        ?>
                  </table>
                  <div class="row mt-5">
                      <div class="col text-center">
                          <div class="block-27">
                              <ul class="pagination pagination-sm justify-content-end">
                                  <?= $phantrang ?>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-1">
              </div>
          </div>

          <div id="dataModal" class="modal fade">
              <div class="modal-dialog">
                  <div style="width: 80%;font-size: 14px;padding: 4px;" class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Chi tiết Slider</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body" id="slider_detail">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      </div>
                  </div>
              </div>
          </div>
          <div id="add_data_Modal" class="modal fade">
              <div class="modal-dialog">
                  <div style="width: 80%;font-size: 14px;padding: 4px;" class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title">Xử lý Slider</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form action="" method="post" id="insert_form" enctype="multipart/form-data">
                              <label>Name</label>
                              <input type=" text" name="name" id="name" class="form-control" />
                              <br />
                              <label>Note</label>
                              <input type="text" name="note" id="note" class="form-control" />
                              <br />
                              <label>Hình ảnh</label>
                              <input type="file" id="files" name="files">
                              <br>
                              <input type="hidden" name="id" id="id" />
                              <input type="submit" onclick="select()" name="insert" id="insert" value="Insert" class="btn btn-success" />
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      </div>
                  </div>
              </div>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <script>
              $(document).ready(function() {
                  $('#add').click(function() {
                      $('#insert').val("Insert");
                      $('#insert_form')[0].reset();
                  });
                  $(document).on('click', '.edit_data', function() {
                      var id = $(this).attr("id");
                      //   image = "";
                      //   // Read selected files
                      //   var totalfiles = document.getElementById('files').files.length;

                      //   var imgArray = document.getElementById('files').files;

                      //   for (var i = 0; i < totalfiles; i++) {
                      //       image += imgArray[i]['name'];
                      //   }
                      $.ajax({
                          url: "slider/fetchslider.php",
                          method: "POST",
                          data: {
                              id: id
                          },
                          dataType: "json",
                          success: function(data) {
                              $('#name').val(data.name);
                              $('#note').val(data.note);
                              $('#id').val(data.id);
                              $('#insert').val("Update");
                              $('#add_data_Modal').modal('show');
                          }

                      });
                  });
                  $('#insert_form').on("submit", function(event) {
                      event.preventDefault();

                      var image = '';
                      var tmp_name ='';
                      var imgArray = document.getElementById('files').files;
                      var length = document.getElementById('files').files.length;
                      for (let i = 0; i < length; i++) {
                       image += imgArray[i]['name'];
                       tmp_name += imgArray[i]['tmp_name'];
                      }
                   
                      //   var tmpName = imgArray['tmp_name'];


                      var data = $('#insert_form').serialize();
                      data += '&image=' + image;
                      data += '&tmp_name=' + tmp_name;
                      alert(data);
                      if ($('#name').val() == "") {
                          alert("Name is required");
                      } else {
                          $.ajax({
                              url: "slider/insertslider.php",
                              method: "POST",
                              data: data,
                              beforeSend: function() {
                                  $('#insert').text("Inserting");
                              },
                              success: function(data) {
                                  $('#insert_form')[0].reset();
                                  $('#add_data_Modal').modal('hide');
                                  $('#slider_table').html(data);
                              }
                          });
                      }
                  });
                  $(document).on('click', '.view_data', function() {
                      var id = $(this).attr("id");
                      if (id != '') {
                          $.ajax({
                              url: "slider/selectslider.php",
                              method: "POST",
                              data: {
                                  id: id
                              },
                              success: function(data) {
                                  $('#slider_detail').html(data);
                                  $('#dataModal').modal('show');
                              }
                          });
                      }
                  });
              });
          </script>
      </section>