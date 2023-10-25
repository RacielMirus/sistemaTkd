      <footer class="footer">
          <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
          <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
      </div>


      <!-- CoreUI and necessary plugins-->
      <script src="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
      <script src="<?php echo base_url(); ?>adminCoreIU/vendors/simplebar/js/simplebar.min.js"></script>
      <!-- Plugins and scripts required by this view-->
      <script src="<?php echo base_url(); ?>adminCoreIU/vendors/chart.js/js/chart.min.js"></script>
      <script src="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
      <script src="<?php echo base_url(); ?>adminCoreIU/vendors/@coreui/utils/js/coreui-utils.js"></script>
      <script src="<?php echo base_url(); ?>adminCoreIU/js/main.js"></script>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              const input = document.getElementById("busqueda");
              const button = document.getElementById("buscar");
              const table = document.querySelector(".table");
              const rows = table.querySelectorAll("tbody tr");

              button.addEventListener("click", function() {
                  const term = input.value.toLowerCase();
                  rows.forEach(row => {
                      const cells = row.querySelectorAll("td");
                      let rowText = "";
                      cells.forEach(cell => {
                          rowText += cell.textContent.toLowerCase() + " ";
                      });

                      if (rowText.includes(term)) {
                          row.style.display = "";
                      } else {
                          row.style.display = "none";
                      }
                  });
              });
          });
      </script>

      </body>

      </html>