  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <article class="bg-light">
      <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
          <h3 align="center">Quản lí Color Brand <button type="button" name="add" id="add" data-toggle="modal"
                  data-target="#add_data_Modal" class="btn btn-warning button"><span>Add</span></button></h3>
          <br />
          <div class="row">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10" id="color_table">
                  <table id="customers" class="table table-bordered">
                      <tr>
                          <th width="20%">STT</th>
                          <th width="40%">name_color</th>
                          <th width="20%">Edit</th>
                          <th width="20%">View</th>
                          <th width="20%">Delete</th>
                      </tr>
                      <?php
                        $i = 1;
                        foreach ($showcolorboard as $row) {
                            echo ' <tr>
                             <td align="center">' . $i . '</td>
                             <td>' . $row["name_color"] . '</td>
                             <td align="center"><input type="button" name="edit" value="Edit" id="' . $row["id"] . '" class="btn btn-info btn-xs edit_data" /></td>
                             <td align="center"><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>
                             <td align="center"><a  href="?act=color_board&del=' . $row["id"] . '" name="delete" ><i class="fa fa-trash-o"></i></a></td>
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
                          <h4 class="modal-title">Chi tiết Color Brand</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body" id="color_detail">
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
                          <h4 class="modal-title">Xử lý Color Brand</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <form method="post" id="insert_form">
                              <label>Color Name</label>
                              <input type="text" name="name_color" id="name_color" class="form-control" />
                              <br />
                              <label>Color Code</label>
                              <input type="text" name="color_code" id="color_code" class="form-control" />
                              <br />
                              <input type="hidden" name="id" id="id" />
                              <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
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
              //   $(document).on('click', '.delete', function() {
              //       var id = $(this).attr("id");
              //       if (confirm("Bạn thật sự muốn xóa?")) {
              //           $.ajax({
              //               url: "catalogPOST/delete.php",
              //               method: "POST",
              //               data: {
              //                   id: id,
              //               },
              //               success: function(data) {
              //                   alert("Đã xóa Catalog");
              //               }
              //           });
              //       }
              //   });
              $(document).on('click', '.edit_data', function() {
                  var id = $(this).attr("id");
                  $.ajax({
                      url: "color_board/fetchColor.php",
                      method: "POST",
                      data: {
                          id: id
                      },
                      dataType: "json",
                      success: function(data) {
                          $('#name_color').val(data.name_color);
                          $('#color_code').val(data.color_code);
                          $('#id').val(data.id);
                          $('#insert').val("Update");
                          $('#add_data_Modal').modal('show');
                      }
                  });
              });

              $('#insert_form').on("submit", function(event) {
                  event.preventDefault();
                  if ($('#name_color').val() == "") {
                      alert("Name is required");
                  } else {
                      $.ajax({
                          url: "color_board/insertColor.php",
                          method: "POST",
                          data: $('#insert_form').serialize(),
                          beforeSend: function() {
                              $('#insert').val("Inserting");
                          },
                          success: function(data) {
                              $('#insert_form')[0].reset();
                              $('#add_data_Modal').modal('hide');
                              $('#color_table').html(data);
                          }
                      });
                  }
              });
              $(document).on('click', '.view_data', function() {
                  var id = $(this).attr("id");
                  if (id != '') {
                      $.ajax({
                          url: "color_board/selectColor.php",
                          method: "POST",
                          data: {
                              id: id
                          },
                          success: function(data) {
                              $('#color_detail').html(data);
                              $('#dataModal').modal('show');
                          }
                      });
                  }
              });
          });
          </script>
      </section>