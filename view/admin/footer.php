  <footer>
      <p class="bg-white p-3 shadow-sm m-0">Copyright © 2020 VShop</p>
  </footer>
  </article>

  <script src="view/admin/asset/fontawesome-free-5.14.0-web/js/Pop-Up.js"></script>
  <script>
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
  </script>
  </body>

  </html>